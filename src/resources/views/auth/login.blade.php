@extends('layouts.app')

@section('title')
    <title>Login</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="container">
    <h1 class="container-h">Login</h1>
    <form method="POST" action="{{ route('login') }}" class="form">
        @csrf
        <div class="form-group">
            <label for="email" class="form-group_label">Email</label>
            <input type="email" name="email" id="email" class="form-group_input" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password" class="form-group_label">Password</label>
            <input type="password" name="password" id="password" class="form-group_input" placeholder="Password">
        </div>
        <button type="submit" class="form-group_button">
            ログイン
        </button>
    </form>
</div>