<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'active',
            'description' => 'Activo'
        ]);

        DB::table('statuses')->insert([
            'name' => 'inactive',
            'description' => 'Inactivo'
        ]);

        DB::table('statuses')->insert([
            'name' => 'finished',
            'description' => 'Finalizado'
        ]);
    }
}
