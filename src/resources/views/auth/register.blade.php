@extends('layouts.app')

@section('title')
    <title>register</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="container">
    <h1 class="container-h">Registration</h1>
    <form method="POST" action="{{ route('register') }}" class="form">
        @csrf
        <div class="form-group">
            <label for="name" class="form-group_label">Name</label>
            <input type="text" name="name" id="name" class="form-group_input" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="email" class="form-group_label">Email</label>
            <input type="email" name="email" id="email" class="form-group_input" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password" class="form-group_label">Password</label>
            <input type="password" name="password" id="password" class="form-group_input" placeholder="Password">
        </div>
        <button type="submit" class="form-group_button">
            登録
        </button>
    </form>
</div>
@endsection