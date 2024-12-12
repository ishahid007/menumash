<?php

use App\Http\Controllers\Api\MenuController;
use Illuminate\Support\Facades\Route;

// Retrieve all menus
Route::get('/menu', MenuController::class);
