<?php

namespace Database\Factories;

use App\Enums\VehicleCategory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(array: VehicleCategory::cases()),
        ];
    }
}
