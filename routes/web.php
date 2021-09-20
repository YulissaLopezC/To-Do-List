<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareasController;


Route::resource('/', tareasController::class);
Route::resource('tareas', tareasController::class);
