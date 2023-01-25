<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $casts = [
        //
    ];

    public function carModels(): BelongsToMany
    {
        return $this->belongsToMany(related: CarModel::class, table: 'car_model_location');
    }

    public function cars(): HasMany
    {
        return $this->hasMany(related: Car::class);
    }
}
