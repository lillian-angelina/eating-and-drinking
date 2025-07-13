<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <title>飲食予約管理システム</title>
    <link rel="stylesheet" href="{{ asset('css/layouts-app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header_logo">
            <a href="{{ url('/components/menu') }}" class="logo"><img src="{{ asset('images/detail.png') }}">Rese</a>
        </div>

        @yield('search')

    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

    @yield('js')
</body>

</html>