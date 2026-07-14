<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kategori_id' => Kategori::factory(),
            'kode_produk' => strtoupper(fake()->unique()->bothify('PRD###')),
            'nama_produk' => fake()->words(3, true),
            'harga' => fake()->numberBetween(10000, 500000),
            'stok' => fake()->numberBetween(20, 150),
        ];
    }
}
