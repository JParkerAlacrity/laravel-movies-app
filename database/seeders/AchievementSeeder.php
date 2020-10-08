<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Movie;
use App\Models\Actor;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $movies = Movie::all();

        $genres = $movies->map(function ($movie) {
            return $movie->genre;
        })->unique()->values();           
        
        foreach($genres as $genre){
            
            Achievement::create([
                'achievement' => $genre . " Fan",
                'ranking' => 'gold',
                
            ]);
        }

        $actors = Actor::all();

        $actors = $actors->map(function ($actor) {
            return $actor->actor;
        })->unique()->values();           
        
        foreach($actors as $actor){

            
            
            Achievement::create([
                'achievement' => $actor . " Fan",
                'ranking' => 'silver'
            ]);

            


        }
        // foreach($achievements as $achievement){
        //     for($i=0 ; $i<$randNum ; $i++){
                
        //         $movie->actors()->attach($actors->random()->id);
        //     }
        // }
        

    }
}
