<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated =  $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['string', 'min:3', 'max:255'],
            'price' => ['required', 'numeric', 'min:0.01'],
            'quantity' => ['required', 'numeric', 'min:1'],
        ]);

        Product::query()->create($validated);

        return redirect()->route('products.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view('products.edit', [
            'product' => $product,
        ]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $validated =  $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['string', 'min:3', 'max:255'],
            'price' => ['required', 'numeric', 'min:0.01'],
            'quantity' => ['required', 'numeric', 'min:1'],
        ]);

        $product->update($validated);

        return redirect()->route('products.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
