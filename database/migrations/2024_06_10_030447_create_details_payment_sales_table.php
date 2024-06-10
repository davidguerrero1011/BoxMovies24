<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details_payment_sales', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('payment_types_id');
            $table->foreign('payment_types_id')->references('id')->on('payments_types');

            $table->text('description')->nullable();
            $table->string('number_phone_payment', 20)->nullable();
            $table->string('card_number', 50)->nullable();
            $table->string('payment_installments', 5)->nullable();
            $table->string('cvc', 4)->nullable();
            $table->double('total_payment')->nullable();
            $table->enum('state', ['Exitoso','Pendiente', 'Fallo', 'Cambio', 'Devolución'])->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('sale_id');
            $table->foreign('sale_id')->references('id')->on('sales');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_payment_sales');
    }
};
