<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        CarModel::query()->with('locations')
                ->each(
                    callback: function (CarModel $car_model) {
                        Car::factory()
                           ->for(factory: $car_model, relationship: 'carModel')
                           ->for(factory: $car_model->locations->random(), relationship: 'location')
                           ->create();
                    },
                    count: 20,
                );
    }
}
