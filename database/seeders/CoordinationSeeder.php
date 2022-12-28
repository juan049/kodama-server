<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
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
        DB::table('coordinations')->insert([
            'name' => 'Coordinación de autorizaciones...........',
            'slug' => 'CALP',
            'description' => 'Descripción generica',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);

        DB::table('coordinations')->insert([
            'name' => 'Coordinación de seguimiento...........',
            'slug' => 'CGCA',
            'description' => 'Descripción generica',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);

        DB::table('coordinations')->insert([
            'name' => 'Coordinación de impacto...........',
            'slug' => 'CIRA',
            'description' => 'Descripción generica',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);
    }
}
