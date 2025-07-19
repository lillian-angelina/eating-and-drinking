@extends('layouts.app')

@section('title')
    <title>予約完了</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="container_reservation">
            <p class="container-text">ご予約ありがとうございます</p>
        </div>
        <div class="button">
            <a href="{{ route('home') }}" class="button-home">戻る</a>
        </div>
    </div>
@endsection