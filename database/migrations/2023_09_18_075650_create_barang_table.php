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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kode_barang');
            $table->string('type');
            $table->string('brand');
            $table->char('qty');
            $table->char('price');
            $table->char('disc')->nullable();
            $table->char('after_disc')->nullable();
            $table->char('total');
            $table->string('rak');
            $table->string('kondisi');
            $table->string('ex-project')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
