@extends('layouts.app')

@section('title')
    <title>店舗一覧</title>
@endsection

@section('search')
    @include('components.search-form')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="restaurant-list">
        <div class="grid">
            @foreach ($restaurants as $restaurant)
                <div class="card">
                    <img src="{{ asset($restaurant->image_path) }}" alt="{{ $restaurant->name }}">
                    <div class="card-body">
                        <p class="card-body_name">{{ $restaurant->name }}</p>
                        <p class="card-body_area-genre">#{{ $restaurant->display_area }} #{{ $restaurant->display_genre }}</p>
                        <p class="btn-a"><a href="{{ route('restaurants.show', $restaurant->id) }}" class="btn">詳しくみる</a>
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
                                    onclick="location.href='{{ route('login') }}'">♥</button>
                            @endauth
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection