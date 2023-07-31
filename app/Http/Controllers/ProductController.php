<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
           'products' => Product::paginate(10)
        ]);
    }

    public function create()
    {
        $categories= Category::orderby('name')->get();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'required|integer',
        ]);

        Product::create($data);
        return back()->with('message', 'product created.');
    }

    public  function edit(Product $product)
    {
        $categories = Category::ordenBy('name')->get();
        return view('products.edit', compact('product', 'categories'));
    }
    public function update(Product $product,Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'required|integer',
        ]);

        Product::create($data);
        return back()-> with('message', 'product updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('message', 'product deleted.');
    }
}
