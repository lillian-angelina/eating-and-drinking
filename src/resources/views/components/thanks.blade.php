@extends('layouts.app')

@section('title')
    <title>Thanks</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="container_thanks">
            <p class="container-text">会員登録ありがとうございます</p>
        </div>
        <div class="button">
            <a href="{{ route('login') }}" class="button-login">ログインする</a>
        </div>
    </div>
@endsection