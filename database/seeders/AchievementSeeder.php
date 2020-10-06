<?php

namespace Database\Seeders;

use App\Models\Movie;
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

        foreach($movies as $movie){

            $genreDuplicates = [];
            $genreDuplicates.array_push($movie->genre);
        }   
        
        foreach($genreDuplicates as $genre){
            
            $genres = [];

            if (!in_array($genreDuplicates->genre,$genres)){
                $genres.array_push($genreDuplicates->genre);
            }
        }            
        
        foreach($genres as $genre){
            Achievement::create([
                'achievement' => $genre . " Fan"
            ]);
        }
        

    }
}
