<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RepairShop extends Model
{
    /** @use HasFactory<\Database\Factories\RepairShopFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'tax_id',
        'description',
        'lat',
        'lng',
    ];

    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }


}
