<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class CarModelLocationSeeder extends Seeder
{
    public function run(): void
    {
        CarModel::query()->each(
            callback: function (CarModel $car_model) {
                $car_model->locations()->syncWithPivotValues(
                    ids: Location::query()->inRandomOrder()->limit(random_int(1, 5))->get('id'),
                    values: ['quantity' => random_int(1, 5)],
                );
            },
            count: 50,
        );
    }
}
