<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Peliculas', 'Series', 'Documentales', 'Sports', 'Entretenimiento', 'Comedia', 'Televisión', 'Streaming', 'Radio', 'Música'];
        foreach ($categories as $category) {
            Categories::insert([
                'category' => $category
            ]);
        }
    }
}
