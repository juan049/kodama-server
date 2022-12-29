<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();

        foreach($clients as $client)
        {
            for($i=0;$i<4;$i++)
            {
                $contact = Contact::factory(1)->create()[0];
                DB::table('client_contacts')->insert([
                    'uuid' => Str::uuid(),
                    'client_id' => $client->id,
                    'name' => fake()->name(),
                    'last_name' => fake()->lastName(),
                    'contact_id' => $contact->id,    
                    'is_legal_representative' => (rand(0,1) === 1),
                    'creator' => null,
                    'legal_power' => null,
                    'official_id' => null
                ]);
            }
        }

    }
}
