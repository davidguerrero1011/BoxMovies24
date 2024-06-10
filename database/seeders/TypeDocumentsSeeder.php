<?php

namespace Database\Seeders;

use App\Models\TypeDocuments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documents = ['Registro Civil', 'Tarjeta de Identidad', 'Contraseña', 'Cedula', 'Cedula de Extranjeria', 'Pasaporte', 'Visa'];
        foreach ($documents as $document) {
            TypeDocuments::insert([
                'document' => $document
            ]);
        }
    }
}
