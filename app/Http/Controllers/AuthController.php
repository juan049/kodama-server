<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    
    public function register( Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max::255|unique:users',
            'password' => 'required:string:min8'

        ]);
        
        if ($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]); 

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json([
                'data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);
    }

    public function login( Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))){
            return response()
                ->json([ 'message' => 'Unauthorized' ], 401);
        }        

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;



        return response()
            ->json([
                'ok' => true,
                'data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Has cerrado sesión y tus tokens han sido borrados'
        ];
    }

    public function user_info()
    {
        $user = auth()->user();
        return response()->json($user);

    }


}
