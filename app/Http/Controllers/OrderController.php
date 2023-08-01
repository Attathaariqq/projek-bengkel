<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function get()
    {
        $orders = Order::with(["customer", "product"])->get();
        return view("orders.order", ["orders" => $orders]);
    }

    public function addOrderView()
    {
        return view("orders.order_add");
    }

    public function add(Request $request, Order $order)
    {
        return redirect()->route("order.get");
    }

    public function delete(Order $order)
    {
        $order->delete();
        return back();
    }
}
