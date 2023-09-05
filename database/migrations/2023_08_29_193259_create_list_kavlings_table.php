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
            $table->string('nama');
            $table->integer('kapasitas');
            $table->integer('booking');
            $table->char('panjang');
            $table->char('lebar');
            $table->char('total');
            $table->integer('tunai');
            $table->integer('cicil');
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
