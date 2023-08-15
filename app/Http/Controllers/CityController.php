<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('cities.index',[
            'City' => City::paginate()
        ]);
    }
    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);

        City::create($data);
        return back()->with('message', 'city created successfully');
    }

    public function edit(City $city)
    {
        return view('cities.edit', compact('city'));
    }

    public function update(City $city, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);
        $city->update($data);

        return back()->with('message', 'city updated.');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return back()->with('message', 'departamento deleted');
    }
}
