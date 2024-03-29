<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller {
    
    public function showAllCustomers() {
        return response()->json(Customer::all());
    }

    public function showAllCustomersOneYear($year) {
        return response()->json(Customer::find($year));
    }

    public function showOneCustomer($id) {
        return response()->find(Customer::find($id));
    }

    public function create(Request $request) {
        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }

    public function delete($id) {
        Customer::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function update($id, Request $request) {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return response()->json($customer, 200);
    }
}

?>