<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'status' => 'required|in:0,1',
        ]);

        Category::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'status' => $request->status,
        ]);

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'status' => 'required|in:0,1',
        ]);

        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->icon = $request->icon;   // 👈 ICON UPDATE HERE
        $category->status = $request->status;

        $category->save();

        return redirect()->route('category.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Category deleted successfully');
    }
}