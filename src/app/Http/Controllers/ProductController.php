<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Restaurant;

class ProductController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('mypage.index');
        }

        $restaurants = Restaurant::all(); // または必要な検索/絞り込み処理
        return view('index', compact('restaurants'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        // Product creation logic here

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        // Fetch product by ID and return view
    }

    public function search(Request $request)
    {
        $query = Product::query();

        if ($request->filled('area')) {
            $query->where('area', $request->area);
        }

        if ($request->filled('genre')) {
            $query->where('genre', $request->genre);
        }

        if ($request->filled('query')) {
            $query->where('name', 'like', '%' . $request->query . '%');
        }

        $products = $query->get();

        return view('index', compact('products'));
    }

    public function edit($id)
    {
        // Fetch product by ID and return edit view
    }

    public function update(Request $request, $id)
    {
        // Update product logic here
    }

    public function destroy($id)
    {
        // Delete product logic here
    }
}
