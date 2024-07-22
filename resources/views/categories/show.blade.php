@extends('layouts.app')

@section('title', 'Dettagli del Giocattolo')

@section('content')
        <h1 class="text-2xl text-blue-900 font-bold mb-4">Dettagli della Categoria</h1>

        <div class="bg-white p-6 rounded shadow-md">
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Nome:</strong> {{ $category->name }}</p>

            <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mt-4 inline-block">Modifica</a>
            <a href="{{ route('categories.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block ml-4">Torna alla lista delle categorie</a>
        </div>
@endsection

