<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservations;

class Restaurants extends Model
{
        protected $fillable = [
        'name',
        'image_url',
        'description',
    ];

    /**
     * Get the reservations for the restaurant.
     */
    public function reservations()
    {
        return $this->hasMany(Reservations::class);
    }
}
