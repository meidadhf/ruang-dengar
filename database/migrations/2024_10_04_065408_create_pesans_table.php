<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guru_id'); // Relasi ke guru
            $table->text('pesan'); // Isi pesan
            $table->timestamps(); // Waktu pengiriman
            $table->foreign('guru_id')->references('guru_id')->on('gurus'); // Sesuaikan dengan nama tabel gurumu
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesans');
    }
};
