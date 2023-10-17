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
        Schema::create('keluar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang'); //relasi ruangan sebagai penyimpanan
            $table->string('keterangan');
            $table->integer('jumlah_barang');
            $table->string('qty');
            $table->string('penerima');
            $table->string('tanggal_masuk')->nullable();
            $table->string('tanggal_update')->nullable();

            $table->foreign('id_barang') -> references('id') -> on('barang') -> onDelete('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluar');
    }
};
