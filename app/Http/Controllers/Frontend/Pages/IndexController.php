<?php

namespace App\Http\Controllers\Frontend\Pages;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\CarModel;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\Frontend\CarModelResource;

class IndexController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $models = CarModel::query()
                          ->with(
                              relations: [
                                  'brand',
                                  'category',
                                  'type',
                              ],
                          )
                          ->select(
                              'id',
                              'model',
                              'price',
                              'brand_id',
                              'transmission',
                              'currency',
                              'fuel_type',
                              'image_url',
                              'seat_count',
                              'car_type_id',
                              'category_id',
                          )
                          ->inRandomOrder()
                          ->limit(value: 10)
                          ->get();


        return Inertia::render(
            component: 'Index',
            props: [
                'carModels' => CarModelResource::collection($models),
                'categories' => CategoryResource::collection(Category::query()->get()),
            ],
        );
    }
}
