<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_penjualan_table.php
public function up(): void
{
    Schema::create('penjualan', function (Blueprint $table) {
        $table->id(); // Sesuai dengan unsigned big integer, primary key, auto increment
        $table->foreignId('buku_id')->constrained('buku')->cascadeOnDelete(); // Foreign key ke tabel buku
        $table->date('tanggal');
        $table->integer('eksemplar');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};