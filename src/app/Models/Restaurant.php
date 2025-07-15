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
}