<?php

namespace Database\Factories;

use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Penjualan>
 */
class PenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $produk = Produk::inRandomOrder()->first();

        $jumlah = fake()->numberBetween(1, 5);

        return [
            'produk_id' => $produk->id,
            'nomor_transaksi' => fake()->unique()->bothify('TRX######'),
            'jumlah' => $jumlah,
            'harga' => $produk->harga,
            'total' => $produk->harga * $jumlah,
            'tanggal' => fake()->date(),
        ];
    }
}
