<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'registration' => $this->faker->unique()->vehicleRegistration('K[A-D]{1}[A-Z]{1}-[0-9]{3}[A-Z]{1}'),
            'vin' => $this->faker->unique()->vin(),
            'color' => $this->faker->colorName(),
        ];
    }
}
