@extends('layouts.app')

@section('title')
    <title>マイページ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <h2>{{ $user->name }}さん</h2>

    <h3>予約状況</h3>
    @foreach($reservations as $reservation)
        <div class="reservation-card">
            <p>Shop: {{ $reservation->restaurant->name }}</p>
            <p>Date: {{ $reservation->date }}</p>
            <p>Time: {{ $reservation->time }}</p>
            <p>Number: {{ $reservation->number }}人</p>
        </div>
    @endforeach

    <h3>お気に入り店舗</h3>
    <div class="favorites">
        @foreach($favorites as $restaurant)
            <div class="card">
                <img src="{{ asset($restaurant->image_url) }}" alt="{{ $restaurant->name }}">
                <h4>{{ $restaurant->name }}</h4>
                <p>#{{ $restaurant->area }} #{{ $restaurant->genre }}</p>
                <a href="{{ route('restaurants.show', $restaurant->id) }}" class="btn">詳しくみる</a>
                <form method="POST" action="{{ route('favorites.toggle', $restaurant->id) }}">
                    @csrf
                    <button>♥</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection