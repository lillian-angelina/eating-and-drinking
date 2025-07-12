<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggle(Request $request, Restaurant $restaurant)
    {
        $user = auth()->user();

        $like = Like::where('user_id', $user->id)
            ->where('restaurant_id', $restaurant->id)
            ->first();

        if ($like) {
            $like->delete();
        } else {
            Like::create([
                'user_id' => $user->id,
                'restaurant_id' => $restaurant->id,
            ]);
        }

        return redirect()->back();
    }

}
