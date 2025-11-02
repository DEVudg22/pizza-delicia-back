<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Http\Requests\OthersRequest;

class DrinkController extends Controller
{
    public function index ()
    {
        
        $drinks = Drink::all();
        return response()->json($drinks, 200);
    }

    //busqueda de bebida por id

    public function drink ($id)
    {
        $drink = Drink::find($id);
        return response()->json($drink, 200);
    }

    //insertar bebida
    public function insertDrink (OthersRequest $request) {
        Drink::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_link' => $request->image_link,
            'price' => $request->price
        ]);
        return response()->json([
            'status' => true,
            'message' => 'registro insertado correctamente'

        ], 201);
    }

    public function updateDrink(Request $request, $id)
    {
        $drink = Drink::findOrFail($id);
        $drink->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Datos de la bebida actualizados con éxito'
        ], 200);
    }

     public function deleteDrink($id)
    {
        Drink::find($id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'El registro ha sido eliminado con éxito'
        ], 200);

    }
}
