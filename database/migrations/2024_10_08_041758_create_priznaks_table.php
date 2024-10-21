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
        Schema::create('priznaks', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('product_num');
            $table->string('priznak_id');
            $table->string('product_title');
            $table->string('seria');
            $table->string('priznak_title');
            $table->string('type');
            $table->text('baza')->nullable();
            $table->text('etiketka_1l')->nullable();
            $table->text('etiketka_5l')->nullable();
            $table->text('etiketka_10l')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priznaks');
    }
};
