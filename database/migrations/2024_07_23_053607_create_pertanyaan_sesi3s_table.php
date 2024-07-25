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
        Schema::create('pertanyaan_sesi3s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wilayah_id');
            $table->foreign('wilayah_id')->references('id')->on('wilayahs')->onDelete('cascade');
            $table->text('pertanyaan');
            $table->text('jawaban');
            $table->text('status_pertanyaan')->default(1);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaan_sesi3s');
    }
};
