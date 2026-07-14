<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'nomor_transaksi',
        'jumlah',
        'harga',
        'total',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'harga'   => 'decimal:2',
        'total'   => 'decimal:2',
    ];

    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
    public function detailPenjualans()
    {
        return $this->hasMany(
            DetailPenjualan::class
        );
    }
}