<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToToysTable2 extends Migration
{
    public function up()
    {
        Schema::table('toys', function (Blueprint $table) {
            $table->string('name')->after('id'); // Nome del giocattolo
            $table->foreignId('brand_id')->constrained()->onDelete('cascade')->after('name'); // Riferimento al modello Brand
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->after('brand_id'); // Riferimento al modello Category
        });
    }

    public function down()
    {
        Schema::table('toys', function (Blueprint $table) {
            $table->dropForeign(['brand_id']);
            $table->dropForeign(['category_id']);
            $table->dropColumn(['name', 'brand_id', 'category_id']);
        });
    }
}
