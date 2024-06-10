<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Wilmar David',
            'last_name' => 'Macias Guerrero',
            'type_document_id' => 4,
            'number_document' => '80856960',
            'email' => 'davidguerrero0709@gmail.com',
            'address' => 'Cll 92 # 17-32',
            'phone' => '9495709',
            'password' => bcrypt('12345'),
            'cities_id' => 1
        ]);
    }
}
