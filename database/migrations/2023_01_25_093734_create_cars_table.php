<?php

use App\Models\CarModel;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(model: CarModel::class, column: 'car_model_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->foreignIdFor(model: Location::class, column: 'location_id')
                  ->constrained();
            $table->foreignIdFor(model: User::class, column: 'user_id')
                  ->nullable();

            $table->string(column: 'registration');
            $table->string(column: 'vin');
            $table->string(column: 'color');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
