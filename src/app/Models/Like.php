<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Like extends Model
{
    protected $fillable = ['user_id', 'restaurant_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
