<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait WithFormattedPrice
{
    protected function formattedPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->price->formatTo('en_KE'),
        );
    }
}
