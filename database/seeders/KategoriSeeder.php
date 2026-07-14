<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategori = [
            'Benang',
            'Kain Katun',
            'Kain Rayon',
            'Kain Polyester',
            'Kain Denim',
            'Kain Drill',
            'Kain Canvas',
            'Kain Rajut',
            'Garment',
            'Textile Chemical',
        ];

        foreach ($kategori as $item) {
            Kategori::create([
                'nama_kategori' => $item,
            ]);
        }
    }
}