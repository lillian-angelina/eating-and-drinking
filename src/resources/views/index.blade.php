@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    @if(auth()->check())
        <a href="{{ route('mypage.index') }}"></a>
    @else
        <a href="{{ route('login') }}"></a>
    @endif
</div>