<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $restaurants = Restaurant::all()->map(function ($restaurant) {
            $restaurant->display_area = $this->convertArea($restaurant->area);
            $restaurant->display_genre = $this->convertGenre($restaurant->genre);
            return $restaurant;
        });
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

        return redirect()->route('reservation')->with('message', '予約を保存しました');
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $isFavorited = Auth::check() && Auth::user()->likes()->where('restaurant_id', $id)->exists();

        return view('restaurants.show', compact('restaurant', 'isFavorited'));
    }

    public function search(Request $request)
    {
        $query = Restaurant::query();

        if ($request->filled('area')) {
            $query->where('area', $request->input('area'));
        }

        if ($request->filled('genre')) {
            $query->where('genre', $request->input('genre'));
        }

        if ($request->filled('query')) {
            $query->where('name', 'like', '%' . $request->input('query') . '%');
        }

        $restaurants = $query->get()->map(function ($restaurant) {
            $restaurant->display_area = $this->convertArea($restaurant->area);
            $restaurant->display_genre = $this->convertGenre($restaurant->genre);
            return $restaurant;
        });

        return view('index', compact('restaurants'));
    }

    private function convertArea($area)
    {
        return match ($area) {
            'tokyo' => '東京都',
            'osaka' => '大阪府',
            'hukuoka' => '福岡県',
            default => $area,
        };
    }

    private function convertGenre($genre)
    {
        return match ($genre) {
            'sushi' => '寿司',
            'yakiniku' => '焼肉',
            'ramen' => 'ラーメン',
            'izakaya' => '居酒屋',
            'italian' => 'イタリアン',
            default => $genre,
        };
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'number' => 'required|integer|min:1',
        ]);

        $reservation = Reservation::findOrFail($id);

        if ($reservation->user_id !== auth()->id()) {
            abort(403);
        }

        $reservation->update([
            'date' => $request->date,
            'time' => $request->time,
            'number' => $request->number,
        ]);

        return redirect()->back()->with('success', '予約内容を更新しました。');
    }


    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('mypage')->with('success', '予約をキャンセルしました。');
    }
}
