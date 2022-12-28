<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json([
            'ok' => true,
            'users' => $users
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function save_notes(Request $request)
    {
        $user = auth()->user();

        if(!$user) {
            return response()->json([
                'ok' => false,
                "message" => 'El usuario no ha iniciado sesión'
            ]);
        }

        $validated_notes = $request->validate([
            'notes' => 'string'
        ]);

        // Determino al usuario   
        $user = auth()->user();

        $user->notes = $validated_notes['notes'];
        $result = $user->save();

        if(!$result) {
            return response()->json([
                'ok' => false,
                "message" => 'No se pudieron guardar las notas'
            ]);
        }else{
            return response()->json([
                'ok' => true,
                "message" => 'Notas guardadas correctamente'
            ]);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $user = User::where('uuid', $uuid)->first();

        if(!$user) {
            return response()->json([
                'ok' => false,
                'error' => 'No se encontró esta pagina'
            ]);
        }

        return response()->json([
            'ok' => true,
            'user' => $user
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        //
    }
}
