<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id('pesan_id');
            $table->unsignedBigInteger('guru_id');
            $table->text('message');
            $table->timestamps();

            $table->foreign('guru_id')->references('guru_id')->on('gurus')->onDelete('cascade');
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
