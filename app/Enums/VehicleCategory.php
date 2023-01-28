<?php

namespace App\Enums;

use App\Enums\Concerns\WithLabel;

enum VehicleCategory: string
{
    use WithLabel;

    case BUDGET = 'budget';

    case LUXURY = 'luxury';

    case TOUR = 'tour';

    case WEDDING = 'wedding';

    case BUSINESS = 'business';

    case OFF_ROAD = 'off-road';

    case CARGO = 'cargo';
}
