<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/menu-pizzas', [PizzaController::class, 'index'] );
Route::get('/pizza/{id}', [PizzaController::class, 'pizza'] );
