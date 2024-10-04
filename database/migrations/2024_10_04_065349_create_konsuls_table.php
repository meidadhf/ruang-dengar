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
        Schema::create('konsuls', function (Blueprint $table) {
            $table->id('konsul_id');
            $table->unsignedBigInteger('guru_id');
            $table->text('pesan_konsul');
            $table->timestamps();

            //Foreign key untuk id guru
            $table->foreign('guru_id')->references('guru_id')->on('gurus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsuls');
    }
};
