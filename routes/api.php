<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\DessertController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PriceController;

//RUTAS DEL MENU, publicas

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

//RUTAS DE USUARIO

Route::post('/create-user', [UserController::class, 'createUser']);
Route::post('/login', [UserController::class, 'loginUser']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//grupos de rutas protegidas con autenticación

Route::group(['middleware' => ["auth:sanctum"]], function(){
    //ruta para el logout, tiene que mandar el token en el header
    Route::get('/logout', [UserController::class, 'userLogout']);

    //rutas administradores
    /*  ver producto, crear producto, actualizar producto y eliminar producto */
    //PIZZAS
    //crear solo pizza sin precio
    Route::post('/create-pizza', [PizzaController::class, 'insertPizza']);
    //asignar id pizza con los precios
    Route::post('/add-pizza-price', [PriceController::class, 'addPizzaPrice']);
    //actualizar datos de pizza
    Route::patch('/update-pizza/{id}', [PizzaController::class, 'updatePizza']);
    //eliminar pizza
    Route::delete('/delete-pizza/{id}', [PizzaController::class, 'deletePizza']);

    //postres
    Route::post('/create-dessert', [DessertController::class, 'insertDessert']);
    Route::patch('/update-dessert/{id}', [DessertController::class, 'updateDessert']);
    Route::delete('/delete-drink/{id}', [DrinkController::class, 'deleteDessert']);

    //bebidas
    Route::post('/create-drink', [DrinkController::class, 'insertDrink']);
    Route::patch('/update-drink/{id}', [DrinkController::class, 'updateDrink']);
    Route::delete('/delete-drink/{id}', [DrinkController::class, 'deleteDrink']);

    //extras
     Route::post('/create-extra', [ExtraController::class, 'insertExtra']);
      Route::patch('/update-extra/{id}', [ExtraController::class, 'updateExtra']);
    Route::delete('/delete-extra/{id}', [DrinkController::class, 'deleteExtra']);

});
