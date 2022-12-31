<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Authority;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorityDependencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorities = Authority::all();
        foreach($authorities as $authority)
        {

            DB::table('adresses')->insert([
                'state_id' => 11,
                'municipality_id' => 338,
                'created_at' => Carbon::now()
            ]);
            $adress = DB::table('adresses')->orderBy('created_at', 'desc')->first();
    
            DB::table('contacts')->insert([
                'phone' => '4737352600',
                'website' => 'https://smaot.guanajuato.gob.mx/sitio',
                'created_at' => Carbon::now()
            ]);
            $contact = DB::table('contacts')->orderBy('created_at', 'desc')->first();


            DB::table('authority_dependencies')->insert([
                'uuid' => Str::uuid(),
                'authority_id' => $authority->id,
                'name' => 'Dependencia x',
                'description' => '',
                'adress_id' => $adress->id,
                'contact_id' => $contact->id,
                'director_name' => fake()->name(),
                'director_last_name' => fake()->lastName(),
            ]);
        }
    }
}
