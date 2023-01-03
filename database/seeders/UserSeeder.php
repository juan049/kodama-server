<?php

namespace Database\Seeders;


use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( )
    {
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Juan',
            'last_name' => 'Rodriguez',
            "phone" => '4610000000',
            'email' => 'email@email.com',
            'notes' => 'test',
            'password' => Hash::make('1234567890'),
            "created_at" => Carbon::now(),
            "updated_at" => null
        ]);
    }
}
