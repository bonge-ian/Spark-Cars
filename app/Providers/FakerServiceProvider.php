<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Fakecar;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            abstract: Generator::class,
            concrete: function () {
                $faker = Factory::create();
                $faker->addProvider(provider: new Fakecar(generator: $faker));

                return $faker;
            },
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
