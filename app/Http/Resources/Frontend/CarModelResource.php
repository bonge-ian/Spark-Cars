<?php

namespace App\Http\Resources\Frontend;

use JsonSerializable;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CarTypeResource;
use App\Http\Resources\CategoryResource;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

class CarModelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            //            'model' => $this->model,
            'title' => $this->title,
            'fuel_type' => $this->fuel_type,
            'image_url' => $this->image_url,
            'price' => $this->formatted_price,
            'door_count' => $this->whenHas('door_count'),
            'seat_count' => $this->seat_count,
            'transmission' => $this->transmission,
            'brand' => BrandResource::make($this->whenLoaded('brand')),
            'car_type' => CarTypeResource::make($this->whenLoaded('type')),
            'category' => CategoryResource::make($this->whenLoaded('category')),
        ];
    }
}
