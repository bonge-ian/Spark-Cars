<?php

namespace App\Models;

use App\Enums\VehicleType;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasSlugFromEnum;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarType extends Model
{
    use HasFactory;
    use HasSlugFromEnum;

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
