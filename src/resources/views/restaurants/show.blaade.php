@extends('layouts.app')

@section('title')
<title>店舗詳細</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@endsection

@section('content')
<div class="restaurant-detail">
    <a href="{{ route('restaurants.index') }}">＜</a>
    <h2>{{ $restaurant->name }}</h2>

    <img src="{{ asset($restaurant->image_url) }}" alt="{{ $restaurant->name }}">

    <p>#{{ $restaurant->area }} #{{ $restaurant->genre }}</p>

    <p>{{ $restaurant->description }}</p>

    @auth
    <form method="POST" action="{{ route('likes.toggle', $restaurant->id) }}">
        @csrf
        <button type="submit">
            {{ $isFavorited ? '♥ お気に入り解除' : '♡ お気に入りに追加' }}
        </button>
    </form>
    @endauth

    <div class="reservation-box">
        <h3>予約</h3>
        <form method="POST" action="{{ route('reservations.store') }}">
            @csrf
            <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
            <input type="date" name="date" value="{{ old('date', date('Y-m-d')) }}">
            <input type="time" name="time" value="{{ old('time', '17:00') }}">
            <select name="number">
                @for ($i = 1; $i <= 10; $i++) <option value="{{ $i }}">{{ $i }}人</option>
                    @endfor
            </select>
            <button type="submit">予約する</button>
        </form>
    </div>
</div>
@endsection