<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i = 0; $i <10 ; $i++){
            User::create([

                "name" =>$faker->name,
                "email" => $faker-> email,
                "password" => Hash::make('password')
            ]);
        }

        $users = User::all();
        $movies = Movie::all();

        foreach($users as $user){
            //$randNum = rand(1,count($movies));
            for($i=0 ; $i<100 ; $i++){
                
                $user->watches()->attach($watches->random()->id);
            }
        }
    }
}
