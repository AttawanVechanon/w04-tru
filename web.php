<?php

use App\Http\Controllers\MainController;

Route::get('/activities', [MainController::class, 'activities']);
Route::get('/organizations', [MainController::class, 'organizations']);
Route::get('/communities', [MainController::class, 'communities']);
Route::get('/titles', [MainController::class, 'titles']);
Route::get('/staff', [MainController::class, 'staff']);