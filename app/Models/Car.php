<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'vin',
        'fuel',
        'brand',
        'model',
        'gearbox',
        'features',
        'seat_count',
        'door_count',
        'registration',
    ];

    protected $casts = [
        'features' => AsCollection::class,
    ];
}
