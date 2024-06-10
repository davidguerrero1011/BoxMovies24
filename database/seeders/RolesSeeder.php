<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Cliente', 'Proveedor', 'Empleado', 'Administrador'];
        foreach ($roles as $role) {
            Roles::insert([
                'role' => $role
            ]);
        }
    }
}
