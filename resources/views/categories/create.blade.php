@extends('layouts.app')

@section('title', 'Dettagli del Giocattolo')

@section('content')
        <h1 class="text-2xl font-bold text-blue-900 mb-4">Crea una Nuova Categoria</h1>

        <form action="{{ route('categories.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nome</label>
                <input type="text" id="name" name="name" class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salva</button>
            <a href="{{ route('categories.index') }}" class="text-blue-500 ml-4">Torna alla lista delle categorie</a>
        </form>
@endsection
