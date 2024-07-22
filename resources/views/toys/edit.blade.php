@extends('layouts.app')

@section('title', 'Modifica Giocattolo')

@section('content')
    <h1 class="text-2xl text-blue-900 font-bold mb-4">Modifica Giocattolo</h1>

    <form action="{{ route('toys.update', $toy) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nome</label>
            <input type="text" id="name" name="name" value="{{ $toy->name }}" class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="brand_id" class="block text-gray-700">Brand</label>
            <select id="brand_id" name="brand_id" class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" {{ $toy->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-gray-700">Categoria</label>
            <select id="category_id" name="category_id" class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $toy->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Aggiorna</button>
        <a href="{{ route('toys.index') }}" class="text-blue-500 ml-4">Torna alla lista dei giocattoli</a>
    </form>
@endsection
