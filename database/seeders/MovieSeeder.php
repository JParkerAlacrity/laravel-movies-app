<?php

namespace Database\Seeders;


use App\Models\Movie;
use App\Models\Actor;
use App\Models\Watch;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Xylis\FakerCinema\Provider\Movie as FakeMovie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $faker->addProvider(new FakeMovie($faker));
        for($i = 0; $i < 1000; $i++)
            {
                Movie::create([ //firstOrCreate
                    'title' => $faker->movie($duplicates = false),
                    'runtime' => $faker->runtime,
                    'overview' => $faker->overview,
                    'genre' =>$faker->movieGenre
            ]);
        }

        $movies = Movie::all();
        $actors = Actor::all();

        foreach($movies as $movie){
            $randNum = rand(1,6);
            for($i=0 ; $i<$randNum ; $i++){
                
                $movie->actors()->attach($actors->random()->id);
            }
        }



    }
}
