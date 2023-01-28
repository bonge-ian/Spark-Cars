<?php

namespace Database\Factories;

use App\Models\CarModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CarModel>
 */
class CarModelFactory extends Factory
{
    public function definition(): array
    {
        $vehicle = $this->faker->unique()->vehicleArray();

        return [
            'price' => $this->faker->numberBetween(int1: (3_000 * 100), int2: (60_000 * 100)),
            'fuel_type' => $fuel = $this->faker->vehicleFuelType(),
            'door_count' => $this->faker->vehicleDoorCount(),
            'seat_count' => $this->faker->vehicleSeatCount(),
            'properties' => $this->faker->vehicleProperties(),
            'transmission' => ($fuel === 'electric' || $fuel === 'hybrid')
                ? 'automatic'
                : $this->faker->vehicleGearBoxType(),
            'model' => $vehicle['model'],
            'image_url' => $this->getImage($vehicle),
        ];
    }

    protected function getImage(array $vehicle): string
    {
        $response = Http::acceptJson()
                        ->withToken(token: 'CtKyUJmfTtHrBap9yhiNrHQgSeT8cK5ScVGlJHR6ydRvlCAgpvBWciem')
                        ->get(
                            url: 'https://api.pexels.com/v1/search',
                            query: [
                                'query' => $vehicle['brand'] . ' ' . $vehicle['model'] . ',vehicle,car,auto',
                                'orientation' => 'square',
                                'page' => 1,
                                'per_page' => 1,

                            ],
                        );

        if (! $response->successful()) {
            return 'https://picsum.photos/460/680?random=' . random_int(2, 10);
        }


        return Arr::random(
            $response->collect()->get('photos'),
        )['src']['portrait'] ?? 'https://picsum.photos/460/680.webp?random=' . random_int(2, 10);
    }
}
