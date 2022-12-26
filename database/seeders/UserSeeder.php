<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {
        // DB::table('users')->insert([

        //     'uuid' => Str::uuid(),
        //     'name' => 'Juan José',
        //     'last_name' => 'Rodriguez',
        //     "profile_image" => null,
        //     "phone" => '4610000000',
        //     'email' => 'juan.rodriguez@gmail.com',
        //     'password' => Hash::make('0000000000'),
        //     "created_at" => Carbon::now(),
        //     "updated_at" => null
        // ]);

        // for ($i = 0; $i < 40; $i++) {
        //     DB::table('users')->insert([
        //         'uuid' => Str::uuid(),
        //         'name' => $faker->firstName(),
        //         'last_name' => $faker->lastName(),
        //         "profile_image" => $faker->imageUrl(640, 480, null, true),
        //         "phone" => $faker->phoneNumber(),
        //         'email' => $faker->email(),
        //         'password' => Hash::make('0000000000'),
        //         "created_at" => Carbon::now(),
        //         "updated_at" => null
        //     ]);
        // }

        User::factory(50)->create();


    }
}
