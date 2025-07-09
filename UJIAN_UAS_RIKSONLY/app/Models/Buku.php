<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// app/Models/Buku.php
// app/Models/Buku.php
namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute; // Import class Attribute
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    // ... (relasi penjualan dari langkah 4)
    public function penjualan(): HasMany
    {
        return $this->hasMany(Penjualan::class);
    }

    // Accessor untuk menghitung total buku terjual
    protected function terjual(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->penjualan()->sum('eksemplar'),
        );
    }
}