@extends('layouts.app')

@section('title')
    <title>マイページ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="container">
        <h2>{{ $user->name }}さん</h2>
        <div class="components">
            <div class="component-1">
                <h3>予約状況</h3>
            </div>
            <div class="component-2">
                <h3>お気に入り店舗</h3>
            </div>
        </div>
        <div class="restaurant-detail">
            <div class="left-content">
                <h3>予約</h3>
                @foreach($reservations as $reservation)
                        <div class="reservation-card">
                            <p class="shop-name">Shop</p>
                            <p>{{ $reservation->restaurant->name }}</p>
                        </div>
                        <div class="reservation-card">
                            <p class="shop-date">Date</p>
                            <p>{{ $reservation->date }}</p>
                        </div>
                        <div class="reservation-card">
                            <p class="shop-time">Time</p>
                            <p>{{ $reservation->time }}</p>
                        </div>
                        <div class="reservation-card">
                            <p class="shop-number">Number</p>
                            <p>{{ $reservation->number }}人</p>
                        </div>
                    </div>
                @endforeach


            <div class="right-content">
                <div class="favorites">
                    @foreach($favorites as $restaurant)
                        <div class="card">
                            <img src="{{ asset($restaurant->image_path) }}" alt="{{ $restaurant->name }}">
                            <div class="card-body">
                                <p class="card-body_name">{{ $restaurant->name }}</p>
                                <p class="card-body_area-genre">#{{ $restaurant->display_area }}
                                    #{{ $restaurant->display_genre }}</p>
                                <p class="btn-a"><a href="{{ route('restaurants.show', $restaurant->id) }}"
                                        class="btn">詳しくみる</a>
                                </p>
                                <form action="{{ route('restaurants.like', $restaurant) }}" method="POST" class="like-form">
                                    @csrf
                                    @auth
                                        @if (auth()->user()->likes->contains($restaurant->id))
                                            <button type="submit" class="btn-submit" style="color: red;">♥</button>
                                        @else
                                            <button type="submit" class="btn-submit" style="color: #e9e9e9a8;">♥</button>
                                        @endif
                                    @else
                                        <button type="button" class="btn-submit" style="color: #e9e9e9a8;"
                                            onclick="alert('ログインしてください')">♥</button>
                                    @endauth
                                </form>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection