<?php

use Illuminate\Support\Facades\Route;


Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);

// Protected routes
Route::middleware('api_key')->group(function () {

});