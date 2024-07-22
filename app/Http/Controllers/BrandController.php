<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all(); // Ottiene tutti i brand dal database
        return view('brands.index', compact('brands')); // Passa i brand alla vista
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brands.create'); // Rende la vista del modulo di creazione
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validazione dei dati in ingresso
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        // Creazione del nuovo brand
        Brand::create([
            'name' => $request->input('name'),
        ]);
    
        // Reindirizza alla lista dei brand con un messaggio di successo
        return redirect()->route('brands.index')->with('success', 'Brand creato con successo.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('brands.show', compact('brand')); // Passa il brand alla vista
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand')); // Passa il brand alla vista di modifica
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        // Validazione dei dati in ingresso
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        // Aggiornamento del brand esistente
        $brand->update([
            'name' => $request->input('name'),
        ]);
    
        // Reindirizza alla vista del brand con un messaggio di successo
        return redirect()->route('brands.show', $brand)->with('success', 'Brand aggiornato con successo.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        // Elimina il brand dal database
        $brand->delete();
    
        // Reindirizza alla lista dei brand con un messaggio di successo
        return redirect()->route('brands.index')->with('success', 'Brand eliminato con successo.');
    }
    
}
