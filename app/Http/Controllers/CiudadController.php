<?php

namespace App\Http\Controllers;

use App\Models\ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index()
    {
        return view('ciudad.index',[
            'ciudad' => ciudad::paginate()
        ]);
    }
    public function create()
    {
        return view('ciudad.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);

        ciudad::create($data);

        return back()->with('message', 'city created successfully');
    }

    public function edit(ciudad $city)
    {
        return view('ciudad.edit', compact('city'));
    }

    public function update(ciudad $city, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);
        $city->update($data);

        return back()->with('message', 'ciudad updated.');
    }

    public function destroy(ciudad $city)
    {
        $city->delete();
        return back()->with('message', 'ciudad deleted');
    }
}
