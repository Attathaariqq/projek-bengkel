<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get()
    {
        $products = Product::all();
        return view('products.product' , ['products' => $products]);
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

    public function edit(Product $product, Request $request)
    {
        $product->update($request->all());
        return redirect()->route('product.get');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('product.get');
    }
}
