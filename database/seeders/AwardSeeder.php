<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year=2020;
        for($i=2010;$i<$year;$i++){
            Award:create([
                
            ]);
        }
    }
}
