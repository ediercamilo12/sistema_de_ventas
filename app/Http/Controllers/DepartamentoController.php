<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return view('departamento.index',[
            'departamento' => departamento::paginate()
        ]);
    }
    public function create()
    {
        return view('departamento.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);

        departamento::create($data);

        return back()->with('message', 'departamento created successfully');
    }

    public function edit(departamento $department)
    {
        return view('departamento.edit', compact('department'));
    }

    public function update(departamento $departamento, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);
        $departamento->update($data);

        return back()->with('message', 'departamento updated.');
    }

    public function destroy(departamento $department)
    {
        $department->delete();
        return back()->with('message', 'departamento deleted');
    }

}
