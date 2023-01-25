<?php

namespace App\Enums;

enum VehicleCategory: string
{
    case BUDGET = 'budget';

    case LUXURY = 'luxury';

    case TOUR = 'tour';

    case WEDDING = 'wedding';

    case BUSINESS = 'business';

    case OFF_ROAD = 'off_road';

    case CARGO = 'cargo';
}
