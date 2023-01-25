<?php

namespace App\Models;

use App\Enums\VehicleType;
use App\Models\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarType extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $casts = [
        'name' => VehicleType::class,
    ];

    public function carModels(): HasMany
    {
        return $this->hasMany(related: CarModel::class);
    }
}
