<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index',[
            'employees' => Employee::paginate()
        ]);
    }
    public function create()
    {
        $cities= City::orderBy('name')->get();
        return view('employees.create', compact('cities'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'identification_card' => 'required|max:255',
            'cities_id' => 'required|integer',
        ]);

        employee::create($data);
        return back()->with('message', 'Employees created successfully');
    }

    public function edit(employee $employees)
    {
        $cities= City::orderBy('name')->get();
        return view('employees.create', compact('cities'));
    }

    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'identification_card' => 'required|max:255',
            'cities_id' => 'required|integer',
        ]);


        $employee->update($data);
        return back()->with('message', 'employees updated.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('message', 'employee deleted');
    }
}
