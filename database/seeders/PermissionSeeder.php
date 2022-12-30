<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'ver',
            'description'  => 'Solo puede ver',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Editar',
            'description'  => 'Puede editar',
        ]);
    }
}
