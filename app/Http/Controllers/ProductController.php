<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get()
    {
        return view('products.product');
    }

    public function addView()
    {
        $categories = Category::all();
        return view('products.product_add', ['categories' => $categories]);
    }

    public function add(Product $product, Request $request)
    {
        $product->create($request->all());

        return redirect()->route('product.get');
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
