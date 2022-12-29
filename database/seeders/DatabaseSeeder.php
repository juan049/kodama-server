<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Client;
use App\Models\UserConfig;
use App\Models\UserImageFile;
use Illuminate\Database\Seeder;
use App\Models\UserCoordinationPrivilege;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        //Factory genericos
        User::factory(50)->create();

        //Seeders especificos
        $this->call([
            FileSeeder::class,
            StateSeeder::class,
            MunicipalitySeeder::class,
            UserSeeder::class,
            UserImageFileSeeder::class,
            UserConfigSeeder::class,
            CoordinationSeeder::class,
            PrivilegesSeeder::class,
            UserCoordinationPrivilegeSeeder::class,
        ]);

        Client::factory(50)->create();
    }
}
