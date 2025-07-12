<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurants;
use App\Models\User;

class Reservation extends Model
{
    protected $fillable = [
        'restaurant_id',
        'user_id',
        'reserved_date',
        'reserved_time',
        'number_of_people',
        'status',
    ];

    /**
     * Get the restaurant that owns the reservation.
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurants::class);
    }

    /**
     * Get the user that owns the reservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
