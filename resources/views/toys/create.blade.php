@extends('layouts.app')

@section('title', 'Crea un Nuovo Giocattolo')

@section('content')
    <h1 class="text-2xl text-blue-900 font-bold mb-4">Crea un Nuovo Giocattolo</h1>

    <form action="{{ route('toys.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nome</label>
            <input type="text" id="name" name="name" class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="brand_id" class="block text-gray-700">Brand</label>
            <select id="brand_id" name="brand_id" class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                <option value="">Seleziona un Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-gray-700">Categoria</label>
            <select id="category_id" name="category_id" class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                <option value="">Seleziona una Categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salva</button>
        <a href="{{ route('toys.index') }}" class="text-blue-500 ml-4">Torna alla lista dei giocattoli</a>
    </form>
@endsection
