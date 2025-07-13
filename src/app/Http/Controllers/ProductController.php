<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $restaurants = Restaurant::all();
        return view('index', compact('restaurants'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'date' => 'required|date',
            'time' => 'required',
            'number' => 'required|integer|min:1',
        ]);

        Reservation::create([
            'user_id' => Auth::id(),
            'restaurant_id' => $validated['restaurant_id'],
            'date' => $validated['date'],
            'time' => $validated['time'],
            'number' => $validated['number'],
        ]);

        return redirect()->route('mypage')->with('message', '予約を保存しました');
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $isFavorited = Auth::check() && Auth::user()->favorites()->where('restaurant_id', $id)->exists();

        return view('products.show', compact('products', 'isFavorited'));
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
