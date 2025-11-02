<?php

namespace App\Http\Controllers;
use App\Models\Price;
use App\Models\Pizza;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function addPizzaPrice (Request $request) {
        Price::create([
            'pizza_id' => $request->pizza_id,
            'size' => $request->size,
            'price' => $request->price
           
        ]);
        return response()->json([
            'status' => true,
            'message' => 'precio asignado correctamente',
            

        ], 201);
    }
}
