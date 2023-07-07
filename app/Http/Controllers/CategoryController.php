<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get()
    {
        $categories = Category::all();
        return view('categories.category', ['categories' => $categories]);
    }

    public function addView()
    {
        return view('categories.category_add');
    }

    public function add(Category $category, Request $request)
    {
        $category->create($request->all());

        return redirect()->route('category.get');
    }

    public function editView(Category $category)
    {
        return view('categories.category_edit', ['category' => $category]);
    }

    public function edit(Category $category, Request $request)
    {
        $category->update($request->all());
        return redirect()->route('category.get');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('category.get');
    }
}
