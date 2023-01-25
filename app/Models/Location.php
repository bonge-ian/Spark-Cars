<?php

namespace App\Models;

use App\Models\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Location extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $casts = [
        //
    ];

    public function carModels(): BelongsToMany
    {
        return $this->belongsToMany(related: CarModel::class, table: 'car_model_location')
                    ->withPivot(columns: 'quantity');
    }

    public function cars(): HasMany
    {
        return $this->hasMany(related: Car::class);
    }
}
