<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'model',
        'brand',
        'license_plate',
        'color',
        'year',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
