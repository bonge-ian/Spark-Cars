<?php

namespace App\Casts;

use Brick\Money\Exception\UnknownCurrencyException;
use Brick\Money\Money;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class AsMoney implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     *
     * @throws UnknownCurrencyException
     */
    public function get($model, string $key, $value, array $attributes): mixed
    {
        return Money::ofMinor(minorAmount: $attributes['price'], currency: $attributes['currency']);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes): mixed
    {
        if (! $value instanceof Money) {
            return $value;
        }

        return $value->getMinorAmount()->toInt();
    }
}
