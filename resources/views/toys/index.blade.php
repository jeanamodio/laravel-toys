@extends('layouts.app')

@section('title', 'Dettagli del Giocattolo')

@section('content')

        <h1 class="float-left text-2xl font-bold  text-blue-900 mb-4">Elenco dei Giocattoli</h1>
        <a href="{{ route('toys.create') }}" class="float-right bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Aggiungi Nuovo Giocattolo</a>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="rounded min-w-full bg-white border border-gray-300 rounded-md text-left text-blue-900">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nome</th>
                    <th class="py-2 px-4 border-b">Brand</th>
                    <th class="py-2 px-4 border-b">Categoria</th>
                    <th class="py-2 px-4 border-b text-right">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($toys as $toy)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $toy->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $toy->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $toy->brand->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $toy->category->name }}</td>
                        <td class="py-2 px-4 border-b text-right">
                            <a href="{{ route('toys.show', $toy) }}" class="text-blue-500">🔎</a>
                            <a href="{{ route('toys.edit', $toy) }}" class="text-yellow-500 ml-4">✏️</a>

                            <form action="{{ route('toys.destroy', $toy) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-4">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection

