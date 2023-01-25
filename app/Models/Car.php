<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration',
        'vin',
        'color',
    ];

    protected $casts = [
        //
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(related: Location::class);
    }

    public function carModel(): BelongsTo
    {
        return $this->belongsTo(related: CarModel::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }
}
