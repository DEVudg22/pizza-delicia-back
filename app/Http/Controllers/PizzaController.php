<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Price;
use App\Http\Resources\PizzaResource;
use App\Http\Requests\PizzaRequest;

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

    //insertar nueva pizza sin precio
    public function insertPizza (PizzaRequest $request) {
        Pizza::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_link' => $request->image_link,
           
        ]);
        return response()->json([
            'status' => true,
            'message' => 'registro insertado correctamente',
            'pizza_id'=> Pizza::latest('id')->first()->id,
            'pizza_name' => Pizza::latest('name')->first()->name

        ], 201);
    }

     public function updatePizza(Request $request, $id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Datos de la pizza actualizados con éxito'
        ], 200);
    }

     public function deletePizza($id)
    {
        Pizza::find($id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'El registro ha sido eliminado con éxito'
        ], 200);

    }
}
