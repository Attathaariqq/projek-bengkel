<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get()
    {
        return view('products.products');
    }

    public function addView()
    {
        $categories = Category::all();
        return view('products.product_add', ['categories' => $categories]);
    }

    public function add()
    {

    }

    public function editView()
    {
        return view('products.products');
    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}
