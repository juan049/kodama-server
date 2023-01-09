<?php

namespace App\Http\Controllers;

use App\Mail\PasswordResetMail;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
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
                'access_token' => $token
            ]);
    }

    public function renew(){
        $user = auth()->user();
        auth()->user()->tokens()->delete();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()
            ->json([
                'ok' => true,
                'data' => $user,
                'access_token' => $token
            ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Has cerrado sesión y tus tokens han sido borrados'
        ];
    }

    public function recovery_password( Request $request ){
        $user = User::where('email', $request->email)->first();
        if(!$user){
            $response = generical_response(
                ok: false,
                message: 'Este email no está registrado',
                error_message: 'Este email no está registrado'
            );
        }else{
            // Creo un token de reset
            $user->recover_token = Str::random(32);
            $user->recover_token_expiry_date = Carbon::now()->addHours(24);
            $result = $user->save();

            if($result){
                Mail::to($request->email)->send( new PasswordResetMail($request->email));

                $response = generical_response(
                    ok: true,
                    message: 'Email de recuperación enviado'
                );
            }else{
                $response = generical_response(
                    ok: false,
                    message: 'La operación no se pudo realizar'
                );
            }
        }
        return response()->json($response);
         
    }
}
