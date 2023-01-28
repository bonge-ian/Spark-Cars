<?php

namespace App\Enums\Concerns;

use Illuminate\Support\Str;

trait WithLabel
{
    public function label(): string
    {
        return Str::headline($this->value);
    }
}
