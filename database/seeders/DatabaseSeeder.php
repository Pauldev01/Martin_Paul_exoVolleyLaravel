<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Player::factory()->count(30)->create();
        // Team::factory()->count(10)->create();
        $this->call([
            TeamSeeder::class
        ]);
    }
}
