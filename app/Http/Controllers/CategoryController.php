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
        $categories = Category::all(); // Fetch all categories
        return view('admin\catagories\index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('category_photo')) {
            $path = $request->file('category_photo')->store('categories', 'public');
            $validated['category_photo'] = $path;
        }

        Category::create($validated);
        return redirect()->route('categories.index')->with('success', 'Category created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin\catagories\edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('category_photo')) {
            if ($category->category_photo) {
                Storage::disk('public')->delete($category->category_photo);
            }
            $path = $request->file('category_photo')->store('categories', 'public');
            $validated['category_photo'] = $path;
        }

        $category->update($validated);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->category_photo) {
            Storage::disk('public')->delete($category->category_photo);
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');

    }
}
