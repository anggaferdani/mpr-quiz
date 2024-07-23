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
        Schema::create('pointers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pernyataan_id');
            $table->text('penjelasan');
            $table->enum('sisi', ['pro', 'kontra']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pointers');
    }
};
