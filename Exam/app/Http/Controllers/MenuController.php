<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get all products from the database
        $products = Product::all();
        // return the view with the products
        return view('menus.create', compact('products'));
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
        // create a new menu
        $menu = Menu::create([
            'name' => $request->name
        ]);
        // attach the products to the menu
        $menu->products()->attach($request->products);
        // redirect to the index page
        return redirect()->route('menus.index');
    }
    public function show(Menu $menu)
    {
        // retrieve the menu with its associated products
        $menuWithProducts = Menu::with('products')->findOrFail($menu->id);

        // return the view with the menu and its products
        return view('menus.show', compact('menuWithProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        // retrieve the menu with its associated products
        $menuWithProducts = Menu::with('products')->findOrFail($menu->id);

        // get all products from the database
        $products = Product::all();

        // return the view with the menu, its products, and all products
        return view('menus.edit', compact('menuWithProducts', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        // validate the request
        $request->validate([
            'name' => 'required',
            'products' => 'required|array'
        ]);
        // update the menu
        $menu->update([
            'name' => $request->name
        ]);
        // sync the products to the menu
        $menu->products()->sync($request->products);
        // redirect to the index page
        return redirect()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // delete the menu
        $menu->delete();
        // redirect to the index page
        return redirect()->route('menus.index');
    }
}
