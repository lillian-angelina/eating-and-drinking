{{-- resources/views/components/menu.blade.php --}}
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<div class="content">
    <div class="exit" onclick="goBack()">×</div>
    <nav class="menu">
        <ul>
            @auth
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
                <li><a href="{{ route('mypage') }}">My Page</a></li>
            @else
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            @endauth
        </ul>
    </nav>
</div>
<script>
    function goBack() {
        if (document.referrer !== "") {
            window.history.back();
        } else {
            window.location.href = '/'; // ホームなど任意のURLに
        }
    }
</script>