<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->create();
        $this->call(ActorSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(WatchSeeder::class);
        
    }
}
