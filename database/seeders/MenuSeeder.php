<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = ['Home', 'Paises', 'Ciudades', 'roles', 'tipos de documentos', 'horarios', 'usuarios', 'categories', 'tipos de pago', 'peliculas', 'tipos de ventas', 'ventas', 'favoritos', 'soporte', 'contacto'];
        foreach ($menus as $menu) {
            Menu::insert([
                'option' => $menu,
                'level' => 1
            ]);
        }
    }
}
