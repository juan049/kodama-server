<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\State;
use App\Models\Client;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        //Seeders especificos
        $this->call([
            FileSeeder::class,
        ]);

        if(count(State::all()) === 0 || count(Municipality::all()) === 0){
            $this->call([
                StateSeeder::class,
                MunicipalitySeeder::class,
            ]);    
        }
        

        //Factory genericos
        User::factory(50)->create();
        Client::factory(50)->create();

        
        //Seeders especificos
        $this->call([
            UserSeeder::class,
            UserImageFileSeeder::class,
            UserConfigSeeder::class,
            CoordinationSeeder::class,
            PrivilegesSeeder::class,
            UserCoordinationPrivilegeSeeder::class,
            ClientContactSeeder::class,
            ClientFileSeeder::class,
            AuthoritySeeder::class,
            AuthorityDependencySeeder::class,
            ServiceSeeder::class,
            StateSeeder::class,
            CurrentProcessSeeder::class,
        ]);
    }
}
