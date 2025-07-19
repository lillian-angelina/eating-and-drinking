<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'ログインしてください');
        }

        $reservations = $user->reservations()->with('restaurant')->get();
        $favorites = $user->likes()->get();

        return view('users.mypage', compact('user', 'reservations', 'favorites'));
    }


    public function menu()
    {
        return view('components.menu');
    }
}
