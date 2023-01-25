<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Enums\VehicleCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        foreach (VehicleCategory::cases() as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
