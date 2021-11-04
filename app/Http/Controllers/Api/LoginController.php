<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'email' => $request->username,
            'password' => $request->password,
        ];

        if(auth()->attempt($data)){

            $user = auth()->user();
            $token = $user->createToken('PatmosApiToken')->accessToken;
            $response = [
                'data' => [
                    'user'=>$user,
                    'token' => $token,
                ],
            ];
            return response()->json($response, 200);

        }else{
            return response()->json(['error' => 'Desautorizado'], 401);
        }

    }

    public function register()
    {

    }

    public function user()
    {
        $user = auth()->user();
        return response()->json(['data'=>['user'=>$user]],200);
    }

}
