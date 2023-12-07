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
        Schema::create('list_kavlings', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->string('nama');
            $table->string('kapasitas');
            $table->string('booking');
            $table->string('panjang');
            $table->string('lebar');
            $table->string('total');
            $table->string('tunai');
            $table->string('cicil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_kavlings');
    }
};
