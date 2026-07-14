<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penjualan;
use App\Models\Produk;

class DashboardController extends Controller
{
    /**
     * Display dashboard.
     */
    public function index()
    {
        $jumlahKategori = Kategori::count();

        $jumlahProduk = Produk::count();

        $jumlahTransaksi = Penjualan::count();

        $totalPenjualan = Penjualan::sum('total');

        $stokMenipis = Produk::where('stok', '<=', 10)
            ->orderBy('stok')
            ->limit(5)
            ->get();

        $transaksiTerbaru = Penjualan::with('produk')
            ->latest()
            ->limit(5)
            ->get();

        return view('dashboard.index', [
            'jumlahKategori'   => $jumlahKategori,
            'jumlahProduk'     => $jumlahProduk,
            'jumlahTransaksi'  => $jumlahTransaksi,
            'totalPenjualan'   => $totalPenjualan,
            'stokMenipis'      => $stokMenipis,
            'transaksiTerbaru' => $transaksiTerbaru,
        ]);
    }
}