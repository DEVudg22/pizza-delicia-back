<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\DessertController;
use App\Http\Controllers\ExtraController;

//RUTAS GET

//PIZZAS
Route::get('/menu-pizzas', [PizzaController::class, 'index'] );
Route::get('/pizza/{id}', [PizzaController::class, 'pizza'] );

//BEBIDAS
Route::get('/menu-drinks', [DrinkController::class, 'index'] );
Route::get('/drink/{id}', [DrinkController::class, 'drink'] );

//POSTRES
Route::get('/menu-desserts', [DessertController::class, 'index'] );
Route::get('/dessert/{id}', [DessertController::class, 'dessert'] );

//EXTRAS
Route::get('/menu-extras', [ExtraController::class, 'index'] );
Route::get('/extra/{id}', [ExtraController::class, 'extra'] );

//RUTAS POST