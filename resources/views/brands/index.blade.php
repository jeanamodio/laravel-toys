@extends('layouts.app')

@section('title', 'Dettagli del Giocattoli')

@section('content')
        <h1 class="text-2xl font-bold text-blue-900 mb-4 float-left">Elenco dei Brand</h1>
        <a href="{{ route('brands.create') }}" class="float-right bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Aggiungi Nuovo Brand</a>
        <table class="min-w-full bg-white border border-gray-300 rounded-md text-left text-blue-900">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nome</th>
                    <th class="py-2 px-4 border-b text-right">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $brand->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $brand->name }}</td>
                        <td class="py-2 px-4 border-b text-right">
                            <a href="{{ route('brands.show', $brand) }}" class="text-blue-500">🔎</a>
                            <a href="{{ route('brands.edit', $brand) }}" class="text-yellow-500 ml-4">✏️</a>

                            <form action="{{ route('brands.destroy', $brand) }}" method="POST" style="display:inline;">
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