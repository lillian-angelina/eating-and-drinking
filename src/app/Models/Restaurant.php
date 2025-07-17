<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area',
        'genre',
        'image_path',
    ];

    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function getDisplayAreaAttribute()
    {
        $areas = [
            'tokyo' => '東京都',
            'osaka' => '大阪府',
            'fukuoka' => '福岡県',
        ];
        return $areas[$this->area] ?? $this->area;
    }

    public function getDisplayGenreAttribute()
    {
        $genres = [
            'sushi' => '寿司',
            'yakiniku' => '焼肉',
            'ramen' => 'ラーメン',
            'izakaya' => '居酒屋',
            'italian' => 'イタリアン',
        ];
        return $genres[$this->genre] ?? $this->genre;
    }
}