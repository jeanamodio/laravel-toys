@extends('layouts.app')

@section('title', 'Dettagli del Giocattolo')

@section('content')
        <h1 class="text-2xl font-bold text-blue-900 mb-4">Dettagli del Brand</h1>

        <div class="bg-white p-6 rounded shadow-md">
            <p><strong>ID:</strong> {{ $brand->id }}</p>
            <p><strong>Nome:</strong> {{ $brand->name }}</p>

            <a href="{{ route('brands.edit', $brand) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mt-4 inline-block">Modifica</a>
            <a href="{{ route('brands.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block ml-4">Torna alla lista dei brand</a>
        </div>
    </div>
@endsection