<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrivilegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('privileges')->insert([
            "name" => 'Administrador',
            "description" => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);

        DB::table('privileges')->insert([
            "name" => 'Gerente general',
            "description" => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);

        DB::table('privileges')->insert([
            "name" => 'Gerente de área',
            "description" => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);

        DB::table('privileges')->insert([
            "name" => 'Coordinador',
            "description" => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);

        DB::table('privileges')->insert([
            "name" => 'Analista tecnico',
            "description" => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);

        DB::table('privileges')->insert([
            "name" => 'Administración',
            "description" => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);
    }
}
