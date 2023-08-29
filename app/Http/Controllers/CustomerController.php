<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index',[
            'customers' => Customer::paginate()
        ]);
    }
    public function create()
    {
        $cities= City::orderBy('name')->get();
        return view('customer.create', compact('cities'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'identification_card' => 'required|max:255',
            'cities_id' => 'required|integer',
        ]);

        Customer::create($data);
        return back()->with('message', 'customer created successfully');
    }

    public function edit(Customer $customers)
    {
        $cities= City::orderBy('name')->get();
        return view('customer.create', compact('cities'));
    }

    public function update(Customer $customers, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'identification_card' => 'required|max:255',
            'cities_id' => 'required|integer',
        ]);


        $customers->update($data);
        return back()->with('message', 'employees updated.');
    }

    public function destroy(Customer $customers)
    {
        $customers->delete();
        return back()->with('message', 'employee deleted');
    }
}
