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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->char('nama_barang');
            $table->char('brand');
            $table->char('type');
            $table->char('qty');
            $table->char('unit');
            $table->char('tersedia')->nullable();
            $table->char('kurang')->nullable();
            $table->char('status')->nullable();
            $table->char('price')->nullable();
            $table->char('discount')->nullable();
            $table->char('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
