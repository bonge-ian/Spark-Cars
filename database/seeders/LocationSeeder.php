<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            'Nairobi',
            'Mombasa',
            'Kisumu',
            'Nakuru',
            'Eldoret',
            'Kitale',
            'Nyali',
            'Machakos',
            'Kiambu',
            'Nyeri'
        ];

        foreach ($locations as $location) {
            Location::query()->create(attributes: ['name' => $location]);
        }
    }
}
