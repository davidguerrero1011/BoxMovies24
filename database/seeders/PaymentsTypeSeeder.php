<?php

namespace Database\Seeders;

use App\Models\PaymentsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = ['Efectivo', 'Tarjeta Credito', 'Tarjeta Debito', 'Nequi', 'Daviplata', 'Credito pagos', 'Credito Empresarial', 'Addi'];
        foreach ($payments as $payment) {
            PaymentsType::insert([
                'type' => $payment
            ]);
        }
    }
}
