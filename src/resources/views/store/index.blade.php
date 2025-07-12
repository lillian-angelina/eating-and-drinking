@extends('layouts.app')

@section('title')
    <title>店舗一覧</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/store-index.css') }}">
@endsection

@section('content')
    <div class="store-list">
        @forelse ($restaurants as $restaurant)
            <div class="card">
                <a href="{{ url('/resturant/' . $restaurant->id) }}">
                    @if ($restaurant->image_path)
                        <img class="card-image" src="{{ asset('storage/' . $restaurant->image_path) }}" alt="{{ $restaurant->name }}">
                    @else
                        <div class="card-image">商品画像</div>
                    @endif
                </a>
                <div class="card-body">
                    <a href="{{ url('/restaurant/' . $restaurant->id) }}">
                        <p class="card-title">{{ $restaurant->name }}</p>
                    </a>
                </div>
            </div>
        @empty
            <p>いいねした商品がありません。</p>
        @endforelse
    </div>
@endsection