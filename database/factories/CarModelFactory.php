<?php

namespace Database\Factories;

use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CarModel>
 */
class CarModelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'price' => $this->faker->numberBetween(int1: (3_000 * 100), int2: (60_000 * 100)),
            'fuel_type' => $this->faker->vehicleFuelType(),
            'door_count' => $this->faker->vehicleDoorCount(),
            'seat_count' => $this->faker->vehicleSeatCount(),
            'properties' => $this->faker->vehicleProperties(),
            'transmission' => $this->faker->vehicleGearBoxType(),
        ];
    }
}
