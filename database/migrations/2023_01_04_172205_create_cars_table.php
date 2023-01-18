<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(model: CarType::class, column: 'car_type_id')->constrained();

            $table->string(column: 'brand');
            $table->string(column: 'model');
            $table->string(column: 'registration');
            $table->string(column: 'fuel');
            $table->string(column: 'gearbox');
            $table->string(column: 'vin');

            $table->unsignedTinyInteger(column: 'seat_count');
            $table->unsignedTinyInteger(column: 'door_count');

            $table->json(column: 'features')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
