@extends('layouts.app')

@section('title')
    <title>register</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="container">
        <p class="container-p">Registration</p>
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf
            <div class="form-group">
                <label for="name" class="form-group_label"><img src="{{ asset('images/user.png') }}"
                        class="name-img"></label>
                <input type="text" name="name" id="name" class="form-group_input" placeholder="Username">
            </div>
            @if ($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
            @endif
            <div class="form-group">
                <label for="email" class="form-group_label"><img src="{{ asset('images/mail.png') }}"
                        class="mail-img"></label>
                <input type="email" name="email" id="email" class="form-group_input" placeholder="Email">
            </div>
            @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
            <div class="form-group">
                <label for="password" class="form-group_label"><img src="{{ asset('images/key.png') }}"
                        class="pass-img"></label>
                <input type="password" name="password" id="password" class="form-group_input" placeholder="Password">
            </div>
            @if ($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
            @endif
            <button type="submit" class="form-group_button">
                登録
            </button>
        </form>
    </div>
@endsection