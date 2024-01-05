<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutes = Institute::all();
        return view('dashboard', compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('institutes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);

        Institute::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Institute $institute)
    {
        $products = $institute->products;
        return view('institutes.show', compact('institute', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institute $institute)
    {
        return view('institutes.edit', compact('institute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Institute $institute)
    {
        $request->validate([
            'title' => 'required',
            'address' => 'required'
        ]);

        $institute->update($request->all());

        return redirect()->route('institutes.index')->with('success', 'Institute updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institute $institute)
    {
        if (Auth::user()->hasRole('admin')) {
            $institute->delete();
        } else {
            return redirect()->route('institutes.index')->with('error', 'You are not authorized to delete this institute');
        }
    }
}
