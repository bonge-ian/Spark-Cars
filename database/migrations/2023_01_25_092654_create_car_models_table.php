<?php

use App\Models\Brand;
use App\Models\CarType;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(model: Brand::class, column: 'brand_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->foreignIdFor(model: Category::class, column: 'category_id');
            $table->foreignIdFor(model: CarType::class, column: 'car_type_id');

            $table->string(column: 'model');

            $table->unsignedInteger(column: 'price')
                  ->comment(comment: 'stored as cents, so 1_500 will be stored as (1_500*100)'); // stored as cents, so 1_500 will be stored as (1_500*100)
            $table->string(column: 'currency')->default(value: 'KES');

            $table->string(column: 'fuel_type');
            $table->string(column: 'transmission');
            $table->string(column: 'seat_count');
            $table->string(column: 'door_count');

            $table->json(column: 'properties')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_models');
    }
};
