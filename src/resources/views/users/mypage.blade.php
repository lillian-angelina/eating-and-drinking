@extends('layouts.app')

@section('title')
    <title>マイページ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="mypage-container">
        <div class="mypage-content">
            <div class="reservation-section">
                <h3>予約状況</h3>
                @foreach($reservations as $reservation)
                    <div class="reservation-card">
                        <div class="reservation-header">
                            <span><img src="{{ asset('images/tokei.png') }}" class="tokei-img">予約{{ $loop->iteration }}</span>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="close-btn">×</button>
                            </form>
                        </div>
                        <p><strong class="shop-name">Shop</strong>{{ $reservation->restaurant->name }}</p>
                        <p><strong class="shop-date">Date</strong>{{ $reservation->date }}</p>
                        <p><strong class="shop-time">Time</strong>{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</p>
                        <p><strong class="shop-number">Number</strong>{{ $reservation->number }}人</p>
                    </div>
                @endforeach
            </div>

            <div class="favorite-section">
                <h2>{{ $user->name }}さん</h2>
                <h3>お気に入り店舗</h3>
                <div class="favorite-cards">
                    @foreach($favorites as $restaurant)
                        <div class="favorite-card">
                            <img src="{{ asset($restaurant->image_path) }}" alt="{{ $restaurant->name }}">
                            <div class="card-body">
                                <p class="card-title">{{ $restaurant->name }}</p>
                                <p class="card-tags">#{{ $restaurant->display_area }} #{{ $restaurant->display_genre }}</p>
                                <a href="{{ route('restaurants.show', $restaurant->id) }}" class="btn">詳しくみる</a>
                                <form action="{{ route('restaurants.like', $restaurant) }}" method="POST" class="like-form">
                                    @csrf
                                    @auth
                                        <button type="submit"
                                            class="like-btn {{ auth()->user()->likes->contains($restaurant->id) ? 'liked' : '' }}">
                                            ♥
                                        </button>
                                    @else
                                        <button type="button" class="like-btn" onclick="alert('ログインしてください')">♥</button>
                                    @endauth
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection