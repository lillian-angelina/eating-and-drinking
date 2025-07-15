{{-- resources/views/components/search-form.blade.php --}}
<link rel="stylesheet" href="{{ asset('css/search-form.css') }}">

<form action="{{ route('restaurants.search') }}" method="GET" class="search-form">
    <div class="form-group">
        <select name="area" id="area" onchange="this.form.submit()">
            <option value="">All area</option>
            <option value="tokyo" {{ request('area') == 'tokyo' ? 'selected' : '' }}>東京都</option>
            <option value="osaka" {{ request('area') == 'osaka' ? 'selected' : '' }}>大阪府</option>
            <option value="hukuoka" {{ request('area') == 'hukuoka' ? 'selected' : '' }}>福岡県</option>
        </select>
    </div>

    <div class="line">|</div>

    <div class="form-group">
        <select name="genre" id="genre" onchange="this.form.submit()">
            <option value="">All genre</option>
            <option value="sushi" {{ request('genre') == 'sushi' ? 'selected' : '' }}>寿司</option>
            <option value="ramen" {{ request('genre') == 'ramen' ? 'selected' : '' }}>ラーメン</option>
            <option value="yakiniku" {{ request('genre') == 'yakiniku' ? 'selected' : '' }}>焼肉</option>
            <option value="izakaya" {{ request('genre') == 'izakaya' ? 'selected' : '' }}>居酒屋</option>
            <option value="italian" {{ request('genre') == 'italian' ? 'selected' : '' }}>イタリアン</option>
        </select>
    </div>

    <div class="line">|</div>

    <div class="form-group">
        <input type="text" name="query" id="query" value="{{ request('query') }}" placeholder="🔍Search ...">
    </div>
</form>