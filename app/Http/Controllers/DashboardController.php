<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function get()
    {
        $totalOrder = Order::all()->count();
        $sumOrder = Order::all()->sum("total");
        return view("dashboard", ["totalOrder" => $totalOrder, "sumOrder" => $sumOrder]);
    }
}
