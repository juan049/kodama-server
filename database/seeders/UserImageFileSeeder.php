<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Generator as Faker;

class UserImageFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {
        // Borrar todos los archivos que esten
        // Folder path to be flushed
        $folder_path = storage_path().'/app/files/profile_image';

        // List of name of files inside
        // specified folder
        $files = glob($folder_path.'/*'); 
        
        // Deleting all the files in the list
        foreach($files as $file) {
        
            if(is_file($file)) 
            
                // Delete the given file
                unlink($file); 
        }

        //Obtener usuarios
        $users = User::all();
        
        foreach( $users as $user ) 
        {
            $file_path = \Illuminate\Http\UploadedFile::fake()->create('test.jpg')->store('/files/profile_image');

            DB::table('files')->insert([
                'uuid' => Str::uuid(),
                'path' =>  $file_path,
                'is_image' => true,
                "created_at" => Carbon::now(),
                "updated_at" => null
            ]);

            DB::table('user_image_files')->insert([
                "user_id" => $user->id,
                "file_id" => $user->id,
                "created_at" => Carbon::now(),
                "updated_at" => null
            ]); 
        }
    }
}
