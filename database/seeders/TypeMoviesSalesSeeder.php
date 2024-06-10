<?php

namespace Database\Seeders;

use App\Models\TypeMoviesSales;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeMoviesSalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeSales = ['Venta', 'Alquiler', 'PPE', 'Alquiler Por WIFI'];
        foreach ($typeSales as $typeSale) {
            TypeMoviesSales::insert([
                'type_sale' => $typeSale
            ]);
        }
    }
}
