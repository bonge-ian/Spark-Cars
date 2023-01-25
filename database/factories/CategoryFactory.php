<?php

namespace Database\Factories;

use App\Models\Category;
use App\Enums\VehicleCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $cases = VehicleCategory::cases();
        return [
            'name' => $this->faker->randomElement(array: $cases),
        ];
    }
}
