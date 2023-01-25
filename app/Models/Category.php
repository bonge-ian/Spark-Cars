<?php

namespace App\Models;

use App\Enums\VehicleCategory;
use App\Models\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $casts = [
        'name' => VehicleCategory::class,
    ];

    public function carModels(): HasMany
    {
        return $this->hasMany(related: CarModel::class);
    }
}
