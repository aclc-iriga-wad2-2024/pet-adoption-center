<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // respond
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // respond
        return view('categories.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate inputs
        $request->validate([
            'name' => 'required|string|unique:categories',
        ]);

        // save the new category
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();

        // respond
        return redirect()->route('categories.index')
            ->with('success', 'Category "' . $category->name . '" created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // respond
        return view('categories.show', [
            'category' => $category
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // respond
        return view('categories.edit', [
            'category' => $category
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category, Request $request)
    {
        // validate inputs
        $request->validate([
            'name' => 'required|string|unique:categories,name,' . $category->id,
        ]);

        // update the category
        $category->name = $request->get('name');
        $category->save();

        // respond
        return redirect()->route('categories.index')
            ->with('success', 'Category "' . $category->name . '" updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // delete the category
        $category->delete();

        // respond
        return redirect()->route('categories.index')
            ->with('success', 'Category "' . $category->name . '" deleted successfully!');
    }
}
