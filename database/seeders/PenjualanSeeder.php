<?php

namespace Database\Seeders;

use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $produks = Produk::all();

        if ($produks->count() < 5) {
            return;
        }

        for ($i = 1; $i <= 200; $i++) {

            DB::transaction(function () use ($i) {

                $produkDipilih = Produk::where('stok', '>', 0)
                    ->inRandomOrder()
                    ->take(rand(2, 5))
                    ->get();

                if ($produkDipilih->isEmpty()) {
                    return;
                }

                $penjualan = Penjualan::create([

                    'nomor_transaksi' =>
                        'TRX-'
                        . now()->format('Ymd')
                        . '-'
                        . str_pad($i, 4, '0', STR_PAD_LEFT),

                    'tanggal' =>
                        now()->subDays(rand(0, 90)),

                    'total' => 0,

                ]);

                $grandTotal = 0;

                foreach ($produkDipilih as $produk) {

                    if ($produk->stok <= 0) {
                        continue;
                    }

                    $jumlah = rand(1, min(10, $produk->stok));

                    $subtotal = $jumlah * $produk->harga;

                    DetailPenjualan::create([

                        'penjualan_id' => $penjualan->id,

                        'produk_id' => $produk->id,

                        'harga' => $produk->harga,

                        'jumlah' => $jumlah,

                        'subtotal' => $subtotal,

                    ]);

                    $produk->decrement('stok', $jumlah);

                    $grandTotal += $subtotal;
                }

                $penjualan->update([
                    'total' => $grandTotal,
                ]);
            });
        }
    }
}