<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class CustomerController extends Controller
{
    public function get()
    {
        $customers = Customer::all();
        return view("customers.customer", ["customers" => $customers]);
    }

    public function addCustomerView()
    {
        return view("customers.customer_add");
    }

    public function add(Request $request, Customer $customer)
    {
        $customer->create($request->all());

        return redirect()->route("customer.get");
    }

    public function editCustomerView(Customer $customer)
    {
        return view("customers.customer_edit", ["customer" => $customer]);
    }

    public function edit(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route("customer.get");
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
        return back();
    }
}
