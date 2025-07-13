<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggle(Restaurant $restaurant)
    {
        $user = Auth::user();

        if ($user->likes()->where('restaurant_id', $restaurant->id)->exists()) {
            $user->likes()->detach($restaurant->id);
        } else {
            $user->likes()->attach($restaurant->id);
        }

        return back();
    }
}
