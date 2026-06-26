<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'icon' => 'nullable',
            'status' => 'required|in:0,1',
        ]);
              $path=null;
        if($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $path = Storage::putFile('category-icons', $icon);
        }
       
        Category::create([
            'name' => $request->name,
            'icon' => $path,
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
            'icon' => 'nullable',
            'status' => 'required|in:0,1',
        ]);
        $category = Category::findOrFail($id);
        $psth=null;
        if($request->hasFile('icon')) {
            if($category->icon){
                Storage::delete($category->icon);
            }
            $icon = $request->file('icon');
            $path = Storage::putFile('category-icons', $icon);
            $iconName = basename($path);
        }else{
            $path = $category->icon;
        }

        $category->name = $request->name;
        $category->icon = $path; // 👈 ICON UPDATE HERE
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