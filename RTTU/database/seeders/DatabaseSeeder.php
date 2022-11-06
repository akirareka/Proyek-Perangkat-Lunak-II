<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Routes;
use App\Models\Map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Map::create([
            'name' => "DU",
            'address' => "Dipatiukur no bla bla",
            'lat' => "-6.892946",
            'lng' => "107.618074",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Jatos",
            'address' => "Jatinangor bla bla",
            'lat' => "-6.933951",
            'lng' => "107.771266",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Baltos",
            'address' => "Jatinangor bla bla",
            'lat' => "-6.898862",
            'lng' => "107.609295",
            'kendaraan' => "Shuttle"
        ]);
    }
}
