<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Http\Requests\StoreToyRequest;
use App\Http\Requests\UpdateToyRequest;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;


class ToyController extends Controller
{
    public function index()
    {
        $toys = Toy::with('brand', 'category')->get();
        return view('toys.index', compact('toys'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('toys.create', compact('brands', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        Toy::create([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('toys.index')->with('success', 'Giocattolo creato con successo.');
    }

    public function show(Toy $toy)
    {
        return view('toys.show', compact('toy'));
    }

    public function edit(Toy $toy)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('toys.edit', compact('toy', 'brands', 'categories'));
    }

    public function update(Request $request, Toy $toy)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $toy->update([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('toys.show', $toy)->with('success', 'Giocattolo aggiornato con successo.');
    }

    public function destroy(Toy $toy)
    {
        $toy->delete();

        return redirect()->route('toys.index')->with('success', 'Giocattolo eliminato con successo.');
    }
}

