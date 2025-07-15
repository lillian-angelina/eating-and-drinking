@extends('layouts.app')

@section('title')
    <title>Login</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="container">
        <p class="container-p">Login</p>
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf
            <div class="form-group">
                <label for="email" class="form-group_label"><img src="{{ asset('images/mail.png') }}" class="mail-img"></label>
                <input type="email" name="email" id="email" class="form-group_input" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password" class="form-group_label"><img src="{{ asset('images/key.png') }}" class="pass-img"></label>
                <input type="password" name="password" id="password" class="form-group_input" placeholder="Password">
            </div>
            <button type="submit" class="form-group_button">ログイン</button>
        </form>
    </div>
@endsection