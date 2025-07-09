<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_xx_xx_xxxxxx_create_buku_table.php
public function up(): void
{
    Schema::create('buku', function (Blueprint $table) {
        $table->id(); // Sesuai dengan unsigned big integer, primary key, auto increment
        $table->string('judul'); // Sesuai dengan string(255)
        $table->string('pengarang'); // Sesuai dengan string(255)
        $table->string('kategori'); // Sesuai dengan string(255)
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};