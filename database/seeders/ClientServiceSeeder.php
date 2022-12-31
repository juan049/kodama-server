<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\Coordination;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $clients = Client::all();
        $services = Service::all();
        $coordinations = Coordination::all();
        $users = User::all();

        foreach( $clients as $client )
        {

            DB::table('client_services')->insert([
                'uuid' => Str::uuid(),
                'client_id' => $client->id,
                'service_id' => $services[rand(0, count($services)-1)]->id,
                'status_id' => 1,
                'current_process_id'  => 1,
                'coordination_id' => $coordinations[rand(0, count($coordinations)-1)]->id,
                'created_by' => $users[rand(0, count($users)-1)]->id,
                'assigned_to' => $users[rand(0, count($users)-1)]->id,
                'name' => 'Servicio generico',
                'description' => 'Descripción',
                'is_public' => (rand(0,1) === 0)
            ]);
        }
    }
}
