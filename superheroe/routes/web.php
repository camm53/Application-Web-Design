<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

// Route to the index method of SuperheroController when accessing the root URL
Route::get('/', [SuperheroController::class, 'index']);

// Use the resource route for superheroes
Route::resource('superheroes', SuperheroController::class);