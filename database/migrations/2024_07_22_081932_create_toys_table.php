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
        Schema::create('toys', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome del giocattolo
            $table->foreignId('brand_id')->constrained()->onDelete('cascade'); // Riferimento al modello Brand
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Riferimento al modello Category
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toys');
    }
};
