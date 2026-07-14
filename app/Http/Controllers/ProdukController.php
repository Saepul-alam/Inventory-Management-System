<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $sortBy = $request->input('sort_by', 'id');

        $sortDirection = $request->input('sort_direction', 'desc');

        $allowedSort = [
            'id',
            'kode_produk',
            'nama_produk',
            'harga',
            'stok',
            'created_at',
        ];

        if (! in_array($sortBy, $allowedSort)) {
            $sortBy = 'id';
        }

        if (! in_array($sortDirection, ['asc', 'desc'])) {
            $sortDirection = 'desc';
        }

        $produks = Produk::with('kategori')

            ->when($search, function ($query) use ($search) {

                $query->where(function ($q) use ($search) {

                    $q->where('kode_produk', 'like', "%{$search}%")
                        ->orWhere('nama_produk', 'like', "%{$search}%")
                        ->orWhereHas('kategori', function ($kategori) use ($search) {

                            $kategori->where('nama_kategori', 'like', "%{$search}%");

                        });

                });

            })

            ->orderBy($sortBy, $sortDirection)

            ->paginate(10)

            ->withQueryString();

        return view('produk.index', compact(
            'produks',
            'search',
            'sortBy',
            'sortDirection'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::orderBy('nama_kategori')->get();

        return view('produk.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdukRequest $request)
    {
        Produk::create($request->validated());

        return redirect()
            ->route('produk.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        $produk->load('kategori');

        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $kategoris = Kategori::orderBy('nama_kategori')->get();

        return view('produk.edit', compact(
            'produk',
            'kategoris'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateProdukRequest $request,
        Produk $produk
    ) {

        $produk->update(
            $request->validated()
        );

        return redirect()
            ->route('produk.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        if ($produk->penjualans()->exists()) {

            return redirect()
                ->route('produk.index')
                ->with(
                    'error',
                    'Produk tidak dapat dihapus karena sudah memiliki transaksi.'
                );

        }

        $produk->delete();

        return redirect()
            ->route('produk.index')
            ->with(
                'success',
                'Produk berhasil dihapus.'
            );
    }
}