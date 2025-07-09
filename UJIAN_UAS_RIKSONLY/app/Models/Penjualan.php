<?php

// app/Models/Penjualan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    // Definisikan relasi ke model Buku
    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
}