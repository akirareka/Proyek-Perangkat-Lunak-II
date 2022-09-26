<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Routes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Routes::create([
            'start' => "DU",
            'stop' => "Arcamanik",
            'distance' => "2",
            'price' => "6000"
        ]);
        Routes::create([
            'start' => "Arcamanik",
            'stop' => "UBER",
            'distance' => "2",
            'price' => "6000"
        ]);
        Routes::create([
            'start' => "UBER",
            'stop' => "CIBIRU",
            'distance' => "2",
            'price' => "6000"
        ]);
        Routes::create([
            'start' => "CIBIRU",
            'stop' => "UNPAD",
            'distance' => "2",
            'price' => "6000"
        ]);
    }
}
