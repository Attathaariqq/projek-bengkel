<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get()
    {
        return view('products.products');
    }

    public function addView()
    {
        return view('products.product_add');
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
