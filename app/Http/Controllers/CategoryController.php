<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where('user_id', auth()->id());

        return view('category.index', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
        ]);

        $validated['user_id'] = auth()->id();

        Category::create($validated);
        return redirect()->route('category.index')
            ->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('category.show', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'year' => 'required|numeric',
        ]);
        $category->update($validated);
        return redirect()->route('category.index')
            ->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', 'Post deleted successfully!');
    }

    public function create()
    {
        return view('category.create');
    }

    public function edit(Budget $budget)
    {
        return view('category.edit', compact('category'));
    }
}
