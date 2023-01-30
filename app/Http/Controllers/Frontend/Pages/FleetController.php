<?php

namespace App\Http\Controllers\Frontend\Pages;

use Inertia\Inertia;
use App\Models\Brand;
use Inertia\Response;
use App\Models\CarType;
use App\Models\CarModel;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Builders\CarModelBuilder;
use App\Http\Resources\Frontend\CarModelResource;

class FleetController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $cars = CarModel::query()
                        ->with(relations: ['category', 'brand', 'type'])
                        ->when(
                            value: $request->filled(key: 'brand'),
                            callback: fn (CarModelBuilder $query) => $query->hasBrand(slug: $request->input('brand')),
                        )
                        ->when(
                            value: $request->filled(key: 'category'),
                            callback: fn (CarModelBuilder $query) => $query->hasCategory(slug: $request->input('category')),
                        )
                        ->when(
                            value: $request->filled(key: 'location'),
                            callback: fn (CarModelBuilder $query) => $query->hasLocation(slug: $request->input('location')),
                        )
                        ->when(
                            value: $request->filled(key: 'passenger'),
                            callback: function (CarModelBuilder $query) use ($request) {
                                $passenger = $request->input(key: 'passenger');

                                if ($isOver = str_contains(haystack: $passenger, needle: 'over')) {
                                    return $query->hasSeatCount(maximum: 32, isOver: $isOver);
                                }

                                return $query->hasSeatCount(maximum: (int) $passenger);
                            },
                        )
                        ->when(
                            value: $request->filled(key: 'body-type'),
                            callback: fn (CarModelBuilder $query) => $query->hasType(slug: $request->input('body-type')),
                        )
                        ->when(
                            value: $request->filled('price'),
                            callback: fn (CarModelBuilder $query) => $query->orderBy(
                                column: 'price',
                                direction: $request->input('price'),
                            ),
                            default: fn (CarModelBuilder $query) => $query->orderBy(column: 'price'),
                        )
                        ->latest()
                        ->paginate(perPage: 16)
                        ->withQueryString();

        $filters = $this->getFilters();

        return Inertia::render(
            component: 'Fleet',
            props: [
                'cars' => CarModelResource::collection(resource: $cars),
                'filters' => $filters,
                'selectedFilters' => Arr::except($request->query(), 'page'),
            ],
        );
    }

    protected function getFilters(): array
    {
        return [
            'brand' => Brand::query()->orderBy(column: 'name')->pluck(column: 'name', key: 'slug'),
            'category' => Category::query()->orderBy(column: 'name')->pluck(column: 'name', key: 'slug'),
            'location' => Location::query()->orderBy(column: 'name')->pluck(column: 'name', key: 'slug'),
            'body-type' => CarType::query()->orderBy(column: 'name')->pluck(column: 'name', key: 'slug'),
            'passenger' => [
                '3' => '3 seats',
                '4' => '4 seats',
                '6' => '6 seats',
                '13' => '13 seats',
                '25' => '25 seats',
                '32' => '32 seats',
                'over-32' => 'Over 32',
            ],
        ];
    }

    protected function destructurePassenger(string $passenger_range): array
    {
        if (str_contains($passenger_range, 'over')) {
            return ['isOver' => true, 'maximum' => 14];
        }

        $split = explode('-', $passenger_range);

        return array_combine(keys: ['minimum', 'maximum'], values: $split);
    }
}
