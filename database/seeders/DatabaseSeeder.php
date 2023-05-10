<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\bulletin;
use App\election;
use App\participant;
use Illuminate\Database\Seeder;
use \App\RegionModel;
use App\vote;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            RegionModel::factory(20)->create();
            participant::factory(200)->create();
            election::factory(1)->create();
            bulletin::factory(5)->create();
            vote::factory(195)->create();


    }
}
