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
        for($i = 0; $i < 1000; $i++)
            {
                Actor::create([
                    'actor' => $faker->actor($gender= null, $duplicates = false)
            ]);
        }

    }
}