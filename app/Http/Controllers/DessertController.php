<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dessert;
use App\Http\Requests\OthersRequest;

class DessertController extends Controller
{
    public function index ()
    {
        
        $desserts = Dessert::all();
        return response()->json($desserts, 200);
    }

    //busqueda de postre por id

    public function dessert ($id)
    {
        $dessert = Dessert::find($id);
        return response()->json($dessert, 200);
    }

    //insertar postre
    public function insertDessert (OthersRequest $request) {
        Dessert::create([
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

    public function updateDessert(Request $request, $id)
    {
        $dessert = Dessert::findOrFail($id);
        $dessert->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Datos del postre actualizados con éxito'
        ], 200);
    }

     public function deleteDessert($id)
    {
        Dessert::find($id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'El registro ha sido eliminado con éxito'
        ], 200);

    }
}
