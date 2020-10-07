<?php

namespace Database\Seeders;


use App\Models\Movie;
use App\Models\Actor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

class WatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $movies = Movie::all();
        // $actors = Actor::all();
        // $users = User::all();

        // for($i=0;$i=100;$i++){
        //     $randomMovie = rand()->movies()->id;
        //     $randomUser = rand()->$user;
        //     Watch::create([
        //         'movie_id' => $randomMovie,
        //         'user-id' => $randomUser
        //     ]);
        // }
        

        // foreach($users as $user){
        //     $randNum = rand(1,count($movies));
        //     for($i=0 ; $i<$randNum ; $i++){
                
        //         $watch->users()->attach($users->random()->id);
        //     }
        // }



    }
}
