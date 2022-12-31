<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
        

        DB::table('authorities')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Secretaría de Medio Ambiente y Ordenamiento Territorial', 
            'description' => '',
            'adress_id' => $adress->id,
            'contact_id' => $contact->id
        ]);
    }
}
