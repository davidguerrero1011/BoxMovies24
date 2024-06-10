<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = ['Bogota', 'Medellin', 'Cali', 'Manizales', 'Pereira', 'Barranquilla'];
        foreach ($cities as $city) {
            Cities::insert([
                'city' => $city,
                'country_id' => 1
            ]);
        }
    }
}
