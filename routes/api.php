<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RestaurentController;

//Restaurant route
Route::get('/restaurants', [RestaurentController::class, 'index']);
Route::post('/restaurant-create', [RestaurentController::class, 'store']);


