<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privileges')->insert([
            'name' => 'Coordinación de autorizaciones...........',
            'slug' => 'CALP',
            'description' => 'Descripción generica',
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);
    }
}
