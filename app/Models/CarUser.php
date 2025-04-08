<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CarUser extends Pivot
{
    protected $fillable = [
        'car_id',
        'user_id',
        'plate',
        'cover'
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
