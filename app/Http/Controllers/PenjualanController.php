<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenjualanRequest;
use App\Http\Requests\UpdatePenjualanRequest;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /**
     * INDEX
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $penjualans = Penjualan::with('detailPenjualans.produk')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nomor_transaksi', 'like', "%{$search}%")
                        ->orWhereHas('detailPenjualans.produk', function ($produk) use ($search) {
                            $produk->where('nama_produk', 'like', "%{$search}%");
                        });
                });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('penjualan.index', compact('penjualans'));
    }


    /**
     * CREATE
     */
    public function create()
    {
        $produks = Produk::where('stok', '>', 0)
            ->orderBy('nama_produk')
            ->get();

        return view('penjualan.create', compact('produks'));
    }


    /**
     * STORE
     */
    public function store(StorePenjualanRequest $request)
    {
        DB::transaction(function () use ($request) {

            $produkIds = (array) $request->produk_id;
            $jumlahs = (array) $request->jumlah;

            $penjualan = Penjualan::create([
                'nomor_transaksi' => $this->generateNomorTransaksi(),
                'tanggal' => $request->tanggal,
                'total' => 0,
            ]);

            $total = $this->simpanDetail(
                $penjualan,
                $produkIds,
                $jumlahs
            );

            $penjualan->update([
                'total' => $total
            ]);
        });


        return redirect()
            ->route('penjualan.index')
            ->with('success', 'Transaksi berhasil disimpan.');
    }


    /**
     * SHOW
     */
    public function show(Penjualan $penjualan)
    {
        $penjualan->load('detailPenjualans.produk');

        return view('penjualan.show', compact('penjualan'));
    }


    /**
     * EDIT
     */
    public function edit(Penjualan $penjualan)
    {
        $penjualan->load('detailPenjualans.produk');

        $produks = Produk::orderBy('nama_produk')->get();

        return view(
            'penjualan.edit',
            compact('penjualan', 'produks')
        );
    }


    /**
     * UPDATE
     */
    public function update(
        UpdatePenjualanRequest $request,
        Penjualan $penjualan
    ) {
        DB::transaction(function () use ($request, $penjualan) {

            $this->kembalikanStok($penjualan);

            $penjualan->detailPenjualans()->delete();

            $total = $this->simpanDetail(
                $penjualan,
                $request->produk_id,
                $request->jumlah
            );

            $penjualan->update([
                'tanggal' => $request->tanggal,
                'total' => $total,
            ]);
        });


        return redirect()
            ->route('penjualan.index')
            ->with('success', 'Transaksi berhasil diperbarui.');
    }


    /**
     * DELETE
     */
    public function destroy(Penjualan $penjualan)
    {
        DB::transaction(function () use ($penjualan) {

            $this->kembalikanStok($penjualan);

            $penjualan->delete();
        });


        return redirect()
            ->route('penjualan.index')
            ->with('success', 'Transaksi berhasil dihapus.');
    }


    /**
     * Generate nomor transaksi
     */
    private function generateNomorTransaksi()
    {
        return 'TRX-'
            . now()->format('Ymd')
            . '-'
            . str_pad(
                Penjualan::count() + 1,
                4,
                '0',
                STR_PAD_LEFT
            );
    }


    /**
     * Simpan detail transaksi
     */
    private function simpanDetail(
        Penjualan $penjualan,
        array $produkIds,
        array $jumlahs
    ) {
        $total = 0;

        foreach ($produkIds as $key => $produkId) {

            $produk = Produk::findOrFail($produkId);

            $jumlah = $jumlahs[$key];

            if ($jumlah > $produk->stok) {
                abort(
                    422,
                    "Stok {$produk->nama_produk} tidak mencukupi"
                );
            }

            $subtotal = $produk->harga * $jumlah;

            DetailPenjualan::create([
                'penjualan_id' => $penjualan->id,
                'produk_id' => $produk->id,
                'harga' => $produk->harga,
                'jumlah' => $jumlah,
                'subtotal' => $subtotal,
            ]);

            $produk->decrement('stok', $jumlah);

            $total += $subtotal;
        }

        return $total;
    }


    /**
     * Mengembalikan stok ketika edit/delete
     */
    private function kembalikanStok(Penjualan $penjualan)
    {
        $penjualan->load('detailPenjualans');

        foreach ($penjualan->detailPenjualans as $detail) {

            Produk::where('id', $detail->produk_id)
                ->increment('stok', $detail->jumlah);
        }
    }
}