@extends('layouts.app')

@section('title', 'Dettagli del Giocattolo')

@section('content')
        <h1 class="text-2xl text-blue-900 font-bold mb-4">Modifica Brand</h1>

        <form action="{{ route('brands.update', $brand) }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nome</label>
                <input type="text" id="name" name="name" value="{{ $brand->name }}" class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Aggiorna</button>
            <a href="{{ route('brands.index') }}" class="text-blue-500 ml-4">Torna alla lista dei brand</a>
        </form>
@endsection