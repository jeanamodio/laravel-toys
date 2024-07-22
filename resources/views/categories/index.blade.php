@extends('layouts.app')

@section('title', 'Dettagli del Giocattolo')

@section('content')
        <h1 class="text-2xl text-blue-900 font-bold mb-4 float-left">Elenco delle Categorie</h1>
        <a href="{{ route('categories.create') }}" class="float-right bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Aggiungi Nuova Categoria</a>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-300 rounded-md text-left text-blue-900">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nome</th>
                    <th class="py-2 px-4 border-b text-right">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $category->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $category->name }}</td>
                        <td class="py-2 px-4 border-b text-right">
                            <a href="{{ route('categories.show', $category) }}" class="text-blue-500">🔎</a>
                            <a href="{{ route('categories.edit', $category) }}" class="text-yellow-500 ml-4">✏️</a>

                            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
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
        