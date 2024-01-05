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
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get all products from the database
        $products = Product::all();
        // return the view with the products
        return view('products.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the request
        $request->validate([
            'name' => 'required',
            'products' => 'required|array'
        ]);
        // create a new product
        $product = Product::create([
            'name' => $request->name
        ]);
        // attach the products to the product
        $product->products()->attach($request->products);
        // redirect to the index page
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // retrieve the product with its associated products
        $productWithProducts = Product::with('products')->findOrFail($product->id);

        // get all products from the database
        $products = Product::all();

        // return the view with the product, its products, and all products
        return view('products.edit', compact('productWithProducts', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // validate the request
        $request->validate([
            'name' => 'required',
            'products' => 'required|array'
        ]);

        // update the product
        $product->update([
            'name' => $request->name
        ]);

        // sync the products to the product
        $product->products()->sync($request->products);

        // redirect to the index page
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
    }
}
