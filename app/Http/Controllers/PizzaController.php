<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Http\Resources\PizzaResource;

class PizzaController extends Controller
{
    
    //lista de todas las pizzas con tamaños y precios
    public function index ()
    {
        
        $pizzas = Pizza::with('prices')->get();
        return response()->json($pizzas, 200);
    }

    //busqueda de pizza por id

    public function pizza ($id)
    {
        $pizza = Pizza::find($id);
        return response()->json(new PizzaResource($pizza), 200);
    }

    //insertar nueva pizza
}
