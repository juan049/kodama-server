<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Privilege;
use App\Models\Coordination;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserCoordinationPrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = User::all();
        $coordinations =  count(Coordination::all());
        $privileges =  count(Privilege::all());

        foreach($users as $user) 
        {
            DB::table('user_coordination_privileges')->insert([
                'user_id' => $user->id,
                'coordination_id' => rand(1, $coordinations),
                'privilege_id' => rand(4, $privileges),
                // 'created_at	' => Carbon::now()
            ]);
        }
        
        
    }
}
