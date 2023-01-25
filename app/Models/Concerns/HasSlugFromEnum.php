<?php

namespace App\Models\Concerns;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

trait HasSlugFromEnum
{
    public static function bootHasSlugFromEnum()
    {
        static::creating(function (Model $model) {
            $attributeToGenerateSlug = ($model->name) ?: $model->title;

            $model->slug = Str::slug(title: $attributeToGenerateSlug->value);
        });
    }
}
