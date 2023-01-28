<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Pages\IndexController;
use App\Http\Controllers\Frontend\Pages\FleetController;

Route::get('/', IndexController::class)->name('home');
Route::get('/fleet', FleetController::class)->name('fleet');
