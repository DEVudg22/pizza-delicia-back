<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dessert;

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
}
