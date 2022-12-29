<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Autorización de impacto ambiental',
            'slug' => 'MIA',
            'description' => 'Descripción',  
            'is_following' => false  
        ]);

        DB::table('services')->insert([
            'name' => 'Seguimiento',
            'slug' => 'SEG',
            'description' => 'Descripción',  
            'is_following' => true          
        ]);
    }
}
