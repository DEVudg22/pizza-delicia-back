<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function createUser (CreateUserRequest $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json(['status' => true, 
        'message' => 'usuario creado con éxito',
        'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }

    public function loginUser(LoginRequest $request){
        if(!Auth::attempt($request->only(['email', 'password']))){
            return response()->json(['status' => false, 'message'=> 'Credenciales inválidas'], 401);
        };

        $user = User::where('email', $request->email)->first();
        return response()->json([
            'status' => true,
            'message' => 'Usuario autenticado correctamente',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }

    public function userLogout () {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => true,
            'message' => 'sesión cerrada correctamente'
        ]);
    }
}
