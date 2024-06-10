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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            
            $table->string('movie', 255)->nullable();
            $table->string('director', 255)->nullable();
            $table->json('actors', 255)->nullable();
            
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            
            $table->integer('amount')->default(0);
            $table->double('prize')->nullable();
            
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('users');
            
            $table->enum('available', [0,1])->default(1);
            $table->timestamp('arrive_date')->nullable();
            $table->enum('premier', [0,1])->default(0);
            $table->enum('status', [0,1])->default(1);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
