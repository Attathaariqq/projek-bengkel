<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function get()
    {
        $orders = Order::with(["customers", "products"])->get();
        return view("orders.order", ["orders" => $orders]);
    }

    public function addOrderView()
    {
        $customers = Customer::all();
        $products = Product::all();
        return view("orders.order_add", ["customers" => $customers, "products" => $products]);
    }

    public function add(Request $request, Order $order)
    {
        $data = $request->all();
        // ambil product
        $product = Product::find($data['product_id']);
        $data['total'] = $product['price'];
        // input data
        $order->create($data);
        return redirect()->route("order.get");
    }

    public function delete(Order $order)
    {
        $order->delete();
        return back();
    }
}
