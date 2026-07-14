<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $dataProduk = [

            // ===========================
            // BENANG
            // ===========================

            ['Benang','Cotton Carded 20s'],
            ['Benang','Cotton Carded 24s'],
            ['Benang','Cotton Carded 30s'],
            ['Benang','Cotton Carded 40s'],
            ['Benang','Cotton Combed 20s'],
            ['Benang','Cotton Combed 24s'],
            ['Benang','Cotton Combed 30s'],
            ['Benang','Cotton Combed 40s'],
            ['Benang','Rayon Yarn 30s'],
            ['Benang','Polyester Yarn 40s'],

            // ===========================
            // KAIN KATUN
            // ===========================

            ['Kain Katun','Cotton Poplin White'],
            ['Kain Katun','Cotton Poplin Black'],
            ['Kain Katun','Cotton Twill'],
            ['Kain Katun','Cotton Canvas'],
            ['Kain Katun','Cotton Stretch'],
            ['Kain Katun','Cotton Oxford'],
            ['Kain Katun','Cotton Premium'],
            ['Kain Katun','Cotton Export'],
            ['Kain Katun','Cotton Soft Finish'],
            ['Kain Katun','Cotton Plain'],

            // ===========================
            // RAYON
            // ===========================

            ['Kain Rayon','Rayon Premium'],
            ['Kain Rayon','Rayon Export'],
            ['Kain Rayon','Rayon Printed'],
            ['Kain Rayon','Rayon Stripe'],
            ['Kain Rayon','Rayon Floral'],
            ['Kain Rayon','Rayon Viscose'],
            ['Kain Rayon','Rayon Dyed'],
            ['Kain Rayon','Rayon Soft'],
            ['Kain Rayon','Rayon Exclusive'],
            ['Kain Rayon','Rayon Luxury'],

            // ===========================
            // POLYESTER
            // ===========================

            ['Kain Polyester','Polyester White'],
            ['Kain Polyester','Polyester Black'],
            ['Kain Polyester','Polyester Grey'],
            ['Kain Polyester','Polyester Blue'],
            ['Kain Polyester','Polyester Premium'],
            ['Kain Polyester','Polyester Export'],
            ['Kain Polyester','Polyester Stretch'],
            ['Kain Polyester','Polyester Heavy'],
            ['Kain Polyester','Polyester Light'],
            ['Kain Polyester','Polyester Satin'],

            // ===========================
            // DENIM
            // ===========================

            ['Kain Denim','Denim Indigo'],
            ['Kain Denim','Denim Black'],
            ['Kain Denim','Denim Stretch'],
            ['Kain Denim','Denim Heavy'],
            ['Kain Denim','Denim Premium'],
            ['Kain Denim','Denim Export'],
            ['Kain Denim','Denim Light'],
            ['Kain Denim','Denim Soft'],
            ['Kain Denim','Denim Blue'],
            ['Kain Denim','Denim Washed'],

            // ===========================
            // DRILL
            // ===========================

            ['Kain Drill','Japan Drill'],
            ['Kain Drill','American Drill'],
            ['Kain Drill','Tropical Drill'],
            ['Kain Drill','Drill Premium'],
            ['Kain Drill','Drill Soft'],
            ['Kain Drill','Drill Stretch'],
            ['Kain Drill','Drill Heavy'],
            ['Kain Drill','Drill Export'],
            ['Kain Drill','Drill Grey'],
            ['Kain Drill','Drill Black'],

            // ===========================
            // CANVAS
            // ===========================

            ['Kain Canvas','Canvas Natural'],
            ['Kain Canvas','Canvas White'],
            ['Kain Canvas','Canvas Black'],
            ['Kain Canvas','Canvas Premium'],
            ['Kain Canvas','Canvas Export'],
            ['Kain Canvas','Canvas Heavy'],
            ['Kain Canvas','Canvas Light'],
            ['Kain Canvas','Canvas Soft'],
            ['Kain Canvas','Canvas Dyed'],
            ['Kain Canvas','Canvas Army'],

            // ===========================
            // RAJUT
            // ===========================

            ['Kain Rajut','Baby Terry'],
            ['Kain Rajut','Fleece Cotton'],
            ['Kain Rajut','Interlock Cotton'],
            ['Kain Rajut','Rib Cotton'],
            ['Kain Rajut','CVC Knit'],
            ['Kain Rajut','TC Knit'],
            ['Kain Rajut','Single Knit'],
            ['Kain Rajut','Double Knit'],
            ['Kain Rajut','Spandex Knit'],
            ['Kain Rajut','Poly Knit'],

            // ===========================
            // GARMENT
            // ===========================

            ['Garment','Kaos Polos'],
            ['Garment','Kaos Polo'],
            ['Garment','Kemeja Formal'],
            ['Garment','Kemeja Casual'],
            ['Garment','Celana Chino'],
            ['Garment','Celana Denim'],
            ['Garment','Jaket Hoodie'],
            ['Garment','Sweater Fleece'],
            ['Garment','Seragam Kerja'],
            ['Garment','Apron Textile'],

            // ===========================
            // CHEMICAL
            // ===========================

            ['Textile Chemical','Reactive Dye'],
            ['Textile Chemical','Disperse Dye'],
            ['Textile Chemical','Softener'],
            ['Textile Chemical','Fixing Agent'],
            ['Textile Chemical','Bleaching Agent'],
            ['Textile Chemical','Silicone Softener'],
            ['Textile Chemical','Printing Paste'],
            ['Textile Chemical','Textile Enzyme'],
            ['Textile Chemical','Acetic Acid'],
            ['Textile Chemical','Hydrogen Peroxide'],
        ];

        foreach ($dataProduk as $index => $item) {

            $kategori = Kategori::where(
                'nama_kategori',
                $item[0]
            )->first();

            Produk::create([

                'kategori_id' => $kategori->id,

                'kode_produk' =>
                    'PRD-'
                    . str_pad($index + 1, 4, '0', STR_PAD_LEFT),

                'nama_produk' => $item[1],

                'harga' => rand(25000, 350000),

                'stok' => rand(100, 500),

            ]);
        }
    }
}