<?php

namespace App\Models\Builders;

use Illuminate\Database\Eloquent\Builder;

class CarModelBuilder extends Builder
{
    public function hasBrand(string $slug): static
    {
        return $this->findRelationBySlug(relation: 'brand', slug: $slug);
    }

    public function hasCategory(string $slug): static
    {
        return $this->findRelationBySlug(relation: 'category', slug: $slug);
    }

    public function hasLocation(string $slug): static
    {
        return $this->findRelationBySlug(relation: 'locations', slug: $slug);
    }

    public function hasType(string $slug): static
    {
        return $this->findRelationBySlug(relation: 'type', slug: $slug);
    }

    public function hasSeatCount(int $maximum, bool $isOver = false): static
    {
        if ($isOver) {
            return $this->where('seat_count', operator: '>', value: $maximum);
        }

        return $this->where(column: 'seat_count', operator: '<=', value: $maximum);
    }

    public function priceBetween(int $maximum, int $minimum = 150_000): static
    {
        return $this->whereBetween(column: 'price', values: [$minimum, $maximum]);
    }

    protected function findRelationBySlug(string $relation, string $slug): static
    {
        return $this->whereRelation(
            relation: $relation,
            column: 'slug',
            operator: '=',
            value: $slug,
        );
    }
}
