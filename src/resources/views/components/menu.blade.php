{{-- resources/views/components/menu.blade.php --}}
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<div class="content">
    <div class="exit" onclick="goBack()">×</div>
    <nav class="menu">
        <ul class="menu-list">
            @auth
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
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
            window.location.href = '/';
        }
    }
</script>