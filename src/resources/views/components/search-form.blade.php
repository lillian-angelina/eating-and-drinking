{{-- resources/views/components/search-form.blade.php --}}
<link rel="stylesheet" href="{{ asset('css/search-form.css') }}">

@section('search')
<form action="{{ route('products.search') }}" method="GET" class="search-form">
    <div class="form-group">
        <select name="area" id="area">
            <option value="">All area</option>
            <option value="tokyo" {{ request('area') == 'tokyo' ? 'selected' : '' }}>東京</option>
            <option value="osaka" {{ request('area') == 'osaka' ? 'selected' : '' }}>大阪</option>
            <option value="nagoya" {{ request('area') == 'nagoya' ? 'selected' : '' }}>名古屋</option>
            <!-- 他のエリア -->
        </select>
    </div>

    <div class="form-group">
        <select name="genre" id="genre">
            <option value="">All genre</option>
            <option value="sushi" {{ request('genre') == 'sushi' ? 'selected' : '' }}>寿司</option>
            <option value="ramen" {{ request('genre') == 'ramen' ? 'selected' : '' }}>ラーメン</option>
            <option value="yakiniku" {{ request('genre') == 'yakiniku' ? 'selected' : '' }}>焼肉</option>
            <!-- 他のジャンル -->
        </select>
    </div>

    <div class="form-group">
        <input type="text" name="query" id="query" value="{{ request('query') }}" placeholder="Search ...">
    </div>
</form>