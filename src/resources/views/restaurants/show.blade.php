@extends('layouts.app')

@section('title')
    <title>店舗詳細</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
    <div class="restaurant-detail">
        <div class="left-content">
            <div class="back" onclick="goBack()">＜</div>
            <h2>{{ $restaurant->name }}</h2>

            <img src="{{ asset($restaurant->image_path) }}" alt="{{ $restaurant->name }}">

            <p>#{{ $restaurant->display_area }} #{{ $restaurant->display_genre }}</p>

            <p>{{ $restaurant->description }}</p>

            @auth
                <form method="POST" action="{{ route('likes.toggle', $restaurant->id) }}">
                    @csrf
                    <button type="submit">
                        {{ $isFavorited ? '♥' : '♡' }}
                    </button>
                </form>
            @endauth
        </div>

        <div class="right-content">
            <div class="reservation-box">
                <h3>予約</h3>
                <form method="POST" action="{{ route('reservations.store') }}" id="reservation-form">
                    @csrf
                    <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
                    <input type="date" name="date" id="date" value="{{ old('date', date('Y-m-d')) }}" required>
                    <input type="time" name="time" id="time" value="{{ old('time', '17:00') }}" required>
                    <select name="number" id="number" required>
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}人</option>
                        @endfor
                    </select>
                    <div class="reservation-summary">
                        <div class="shop">
                            <p class="shop-name">Shop</p>
                            <p>{{ $restaurant->name }}</p>
                        </div>
                        <div class="shop">
                            <p class="shop-date">Date</p>
                            <p id="summary-date">{{ old('date', date('Y-m-d')) }}</p>
                        </div>
                        <div class="shop">
                            <p class="shop-time">Time</p>
                            <p id="summary-time">17:00</p>
                        </div>
                        <div class="shop">
                            <p class="shop-number">Number</p>
                            <p id="summary-number">1人</p>
                        </div>
                    </div>
                    <div class="form-button">
                        <button type="submit">予約する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dateInput = document.getElementById('date');
            const timeInput = document.getElementById('time');
            const numberSelect = document.getElementById('number');

            const summaryDate = document.getElementById('summary-date');
            const summaryTime = document.getElementById('summary-time');
            const summaryNumber = document.getElementById('summary-number');

            function updateSummary() {
                summaryDate.textContent = dateInput.value;
                summaryTime.textContent = timeInput.value;
                summaryNumber.textContent = numberSelect.value + '人';
            }

            dateInput.addEventListener('change', updateSummary);
            timeInput.addEventListener('change', updateSummary);
            numberSelect.addEventListener('change', updateSummary);
        });

        function goBack() {
            if (document.referrer !== "") {
                window.history.back();
            } else {
                window.location.href = '/';
            }
        }
    </script>
@endsection