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
                    <img src="{{ asset($restaurant->image_url) }}" alt="{{ $restaurant->name }}">
                    <div class="card-body">
                        <h3>{{ $restaurant->name }}</h3>
                        <p>#{{ $restaurant->area }} #{{ $restaurant->genre }}</p>
                        <a href="#" class="btn">詳しくみる</a>
                        <span class="heart">♡</span> {{-- 実装後はお気に入り機能 --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection