<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

// Route to the index method of SuperheroController when accessing the root URL
Route::get('/', [SuperheroController::class, 'index']);


Route::get('/home', [SuperheroController::class, 'home'])->name('superheroes.home');
Route::get('/about', [SuperheroController::class, 'about'])->name('superheroes.about');
// Use the resource route for superheroes
Route::resource('superheroes', SuperheroController::class);