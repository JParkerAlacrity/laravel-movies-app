<?php

namespace Database\Seeders;


use App\Models\Actor;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Xylis\FakerCinema\Provider\Person as FakeActor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $faker->addProvider(new FakeActor($faker));

        
        
        $actors = $faker->actors($gender= null, $count=190 , $duplicates = false);
        foreach($actors as $actor){
            Actor::create([
            'actor' => $actor
            ]);
        }
        // foreach($actors as $actor){
                
        //         $achievement->actors()->attach($actor->random()->id);
        //     }
        // }



    }
}