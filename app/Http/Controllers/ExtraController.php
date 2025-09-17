<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extra;

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
}
