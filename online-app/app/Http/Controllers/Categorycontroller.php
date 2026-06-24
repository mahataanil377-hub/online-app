<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display list
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('category.index', compact('categories'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store new category
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,png,jpeg',
            'status' => 'required|in:0,1',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;

        // upload icon
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category'), $filename);
            $category->icon = $filename;
        }

        $category->save();

        return redirect()->route('category.index')
                         ->with('success', 'Category created successfully');
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update category
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,png,jpeg',
            'status' => 'required|in:0,1',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->status = $request->status;

        // update icon
        if ($request->hasFile('icon')) {

            // delete old image
            if ($category->icon && File::exists(public_path('uploads/category/'.$category->icon))) {
                File::delete(public_path('uploads/category/'.$category->icon));
            }

            $file = $request->file('icon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category'), $filename);

            $category->icon = $filename;
        }

        $category->save();

        return redirect()->route('category.index')
                         ->with('success', 'Category updated successfully');
    }

    /**
     * Delete category
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // delete image
        if ($category->icon && File::exists(public_path('uploads/category/'.$category->icon))) {
            File::delete(public_path('uploads/category/'.$category->icon));
        }

        $category->delete();

        return redirect()->route('category.index')
                         ->with('success', 'Category deleted successfully');
    }
}