<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Obtener usuarios
        $users = User::all();
        
        foreach( $users as $user ) 
        {
            DB::table('user_configs')->insert([
                "user_id" => $user->id,
                "dark_mode" => (rand(0,1) == 1),
                "created_at" => Carbon::now(),
                "updated_at" => null
            ]); 
        }
    }
}
