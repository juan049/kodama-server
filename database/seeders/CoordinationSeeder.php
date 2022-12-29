<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoordinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('coordinations')->insert([
            'name' => 'Cordinación de autorizaciones......',
            'slug' =>'CALP',
            'description' => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]); 

        DB::table('coordinations')->insert([
            'name' => 'Cordinación de seguimiento......',
            'slug' =>'CGCA',
            'description' => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);
        
        DB::table('coordinations')->insert([
            'name' => 'Cordinación de impacto......',
            'slug' =>'CIRA',
            'description' => 'Descripción',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);

    }
}
