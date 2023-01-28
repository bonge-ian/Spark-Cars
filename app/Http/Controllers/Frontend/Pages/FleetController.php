<?php

namespace App\Http\Controllers\Frontend\Pages;

use Inertia\Inertia;
use App\Models\CarModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Frontend\CarModelResource;

class FleetController extends Controller
{
    public function __invoke(Request $request)
    {
        $cars = CarModel::query()
                        ->with(relations: ['category', 'brand', 'type'])
                        ->orderBy(column: 'price')
                        ->orderBy(column: 'created_at')
                        ->paginate(perPage: 16);

        return Inertia::render(
            component: 'Fleet',
            props: [
                'cars' => CarModelResource::collection(resource: $cars),
            ],
        );
    }
}
