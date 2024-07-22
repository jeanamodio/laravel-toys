@extends('layouts.app')

@section('title', 'Dettagli del Giocattolo')

@section('content')
    <h1 class="text-2xl text-blue-900 font-bold mb-4">Dettagli del Giocattolo</h1>

    <div class="bg-white p-6 rounded shadow-md">
        <p><strong>ID:</strong> {{ $toy->id }}</p>
        <p><strong>Nome:</strong> {{ $toy->name }}</p>
        <p><strong>Brand:</strong> {{ $toy->brand->name }}</p>
        <p><strong>Categoria:</strong> {{ $toy->category->name }}</p>

        <div class="mt-4">
            <a href="{{ route('toys.edit', $toy) }}" class="bg-yellow-500 text-white px-4 py-2 rounded inline-block">Modifica</a>
            <form action="{{ route('toys.destroy', $toy) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded ml-4">Elimina</button>
            </form>
            <a href="{{ route('toys.index') }}" class="text-blue-500 ml-4">Torna alla lista dei giocattoli</a>
        </div>
    </div>
@endsection
