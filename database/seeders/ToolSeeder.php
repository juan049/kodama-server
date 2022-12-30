<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->insert([
            'name' => 'Memoria de calculo RETC',
            'slug' => 'RETC',
            'description' => 'Memoria de calculo para NOM-165-SEMARNAT-2013',
        ]);
    }
}
