<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

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
}
