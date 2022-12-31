<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CurrentProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('current_processes')->insert([
            'name' => 'En proceso de contrato',
            'description' => '',
            'is_following' => false
        ]);

        DB::table('current_processes')->insert([
            'name' => 'Servicio asignado',
            'description' => '',
            'is_following' => false
        ]);

        DB::table('current_processes')->insert([
            'name' => 'Recolección de información',
            'description' => '',
            'is_following' => false
        ]);

        DB::table('current_processes')->insert([
            'name' => 'Elaboración de documentación',
            'description' => '',
            'is_following' => false
        ]);

        DB::table('current_processes')->insert([
            'name' => 'En evaluación por la autoridad',
            'description' => '',
            'is_following' => false
        ]);

        DB::table('current_processes')->insert([
            'name' => 'Respuesta de la autoridad',
            'description' => '',
            'is_following' => false
        ]);

        DB::table('current_processes')->insert([
            'name' => 'Servicio finalizado',
            'description' => '',
            'is_following' => false
        ]);

        DB::table('current_processes')->insert([
            'name' => 'En proceso de contrato',
            'description' => '',
            'is_following' => true
        ]);

        DB::table('current_processes')->insert([
            'name' => 'En proceso de seguimiento',
            'description' => '',
            'is_following' => true
        ]);

        DB::table('current_processes')->insert([
            'name' => 'Servicio finalizado',
            'description' => '',
            'is_following' => true
        ]);
    }
}
