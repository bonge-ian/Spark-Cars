<?php

use App\Models\CarModel;
use App\Models\Location;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('car_model_location', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(model: CarModel::class, column: 'car_model_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(model: Location::class, column: 'location_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger(column: 'quantity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_location');
    }
};
