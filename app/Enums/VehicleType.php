<?php

namespace App\Enums;

use App\Enums\Concerns\WithLabel;

enum VehicleType: string
{
    use WithLabel;

    case SEDAN = 'sedan';
    case SUV = 'suv';
    case HATCHBACK = 'hatchback';
    case COUPE = 'coupe';
    case VAN = 'van';
    case TRUCK = 'truck';
    case MINIVAN = 'minivan';
    case PICKUP = 'pickup';
    case STATION_WAGON = 'station-wagon';
    case CROSSOVER = 'crossover';
    case LIMOUSINE = 'limousine';
    case SPORT = 'sport';
    case BUS = 'bus';
}
