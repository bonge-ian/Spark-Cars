<?php

namespace App\Models;

use App\Casts\AsMoney;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\WithFormattedPrice;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CarModel extends Model
{
    use HasFactory;
    use WithFormattedPrice;

    protected $fillable = [
        'model',
        'price',
        'currency',
        'fuel_type',
        'image_url',
        'door_count',
        'properties',
        'seat_count',
        'transmission',
    ];

    protected $casts = [
        'properties' => AsCollection::class,
        'price' => AsMoney::class,
    ];

    protected $appends = [
        'title',
        'formatted_price',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(related: Brand::class, foreignKey: 'brand_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(related: Category::class, foreignKey: 'category_id');
    }

    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(related: Location::class, table: 'car_model_location')
                    ->withPivot(columns: 'quantity');
    }

    public function cars(): HasMany
    {
        return $this->hasMany(related: Car::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(related: CarType::class, foreignKey: 'car_type_id');
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->brand->name . ' ' . $this->model,
        );
    }
}
