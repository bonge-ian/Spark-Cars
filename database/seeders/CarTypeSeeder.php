<?php

namespace Database\Seeders;

use App\Models\CarType;
use App\Enums\VehicleType;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    public function run(): void
    {
        foreach (VehicleType::cases() as $type) {
            CarType::create([
                'name' => $type,
            ]);
        }
    }
}
