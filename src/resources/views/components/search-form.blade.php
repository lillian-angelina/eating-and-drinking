{{-- resources/views/components/search-form.blade.php --}}
<form action="{{ route('products.search') }}" method="GET" class="search-form">
    <div class="form-group">
        <label for="area">エリア</label>
        <select name="area" id="area">
            <option value="">-- 選択してください --</option>
            <option value="tokyo" {{ request('area') == 'tokyo' ? 'selected' : '' }}>東京</option>
            <option value="osaka" {{ request('area') == 'osaka' ? 'selected' : '' }}>大阪</option>
            <option value="nagoya" {{ request('area') == 'nagoya' ? 'selected' : '' }}>名古屋</option>
            <!-- 他のエリア -->
        </select>
    </div>

    <div class="form-group">
        <label for="genre">ジャンル</label>
        <select name="genre" id="genre">
            <option value="">-- 選択してください --</option>
            <option value="sushi" {{ request('genre') == 'sushi' ? 'selected' : '' }}>寿司</option>
            <option value="ramen" {{ request('genre') == 'ramen' ? 'selected' : '' }}>ラーメン</option>
            <option value="yakiniku" {{ request('genre') == 'yakiniku' ? 'selected' : '' }}>焼肉</option>
            <!-- 他のジャンル -->
        </select>
    </div>

    <div class="form-group">
        <input type="text" name="query" id="query" value="{{ request('query') }}" placeholder="店名・特徴などで検索">
    </div>
</form>