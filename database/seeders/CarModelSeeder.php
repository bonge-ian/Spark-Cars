<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\CarType;
use App\Models\CarModel;
use App\Models\Category;
use Faker\Provider\Fakecar;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    public function run(): void
    {
        fake()->addProvider(Fakecar::class);

        for ($i = 0; $i <= 100; $i++) {
            $vehicle = fake()->unique()->vehicleArray();

            $category = Category::query()->inRandomOrder()->first();
            $car_type = CarType::query()->inRandomOrder()->first();

            $brand = Brand::query()->firstOrCreate([
                'name' => $vehicle['brand'],
            ]);

            $car_model = CarModel::factory()
                                 ->for(
                                     factory: $brand,
                                     relationship: 'brand',
                                 )
                                 ->for(factory: $category, relationship: 'category')
                                 ->for(factory: $car_type, relationship: 'type')
                                 ->create(attributes: ['model' => $vehicle['model'],]);
        }
    }
}
