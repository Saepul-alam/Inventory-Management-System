<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_id',
        'kode_produk',
        'nama_produk',
        'harga',
        'stok',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penjualans(): HasMany
    {
        return $this->hasMany(Penjualan::class);
    }
    public function detailPenjualans()
    {
        return $this->hasMany(
            DetailPenjualan::class
        );
    }
}