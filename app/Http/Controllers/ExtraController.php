<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extra;
use App\Http\Requests\OthersRequest;

class ExtraController extends Controller
{
     public function index ()
    {
        
        $extras = Extra::all();
        return response()->json($extras, 200);
    }

    //busqueda de extra por id

    public function extra ($id)
    {
        $extra = Extra::find($id);
        return response()->json($extra, 200);
    }

    //insertar extra
    public function insertExtra (OthersRequest $request) {
        Extra::create([
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

    public function updateExtra(Request $request, $id)
    {
        $extra = Extra::findOrFail($id);
        $extra->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Datos del complemento actualizados con éxito'
        ], 200);
    }

     public function deleteExtra($id)
    {
        Extra::find($id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'El registro ha sido eliminado con éxito'
        ], 200);

    }
}
