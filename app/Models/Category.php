<?php

namespace App\Models;

use App\Enums\VehicleCategory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasSlugFromEnum;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use HasSlugFromEnum;

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

//    protected static function booted()
//    {
//        static::creating(fn ($category) => $category->slug = Str::slug(title: $category->name->value));
//    }
}
