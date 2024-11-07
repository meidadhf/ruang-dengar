<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('siswas', function (Blueprint $table) {
            $table->string('nama')->nullable()->change(); // Ubah menjadi nullable
        });
    }
    
    public function down()
    {
        Schema::table('siswas', function (Blueprint $table) {
            $table->string('nama')->nullable(false)->change(); // Kembalikan ke non-nullable
        });
    }
    
};
