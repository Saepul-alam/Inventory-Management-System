<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
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
            'nama_kategori',
            'created_at'
        ];

        if (! in_array($sortBy, $allowedSort)) {
            $sortBy = 'id';
        }

        if (! in_array($sortDirection, ['asc', 'desc'])) {
            $sortDirection = 'desc';
        }

        $kategoris = Kategori::query()

            ->when($search, function ($query) use ($search) {

                $query->where('nama_kategori', 'like', "%{$search}%")
                      ->orWhere('deskripsi', 'like', "%{$search}%");

            })

            ->orderBy($sortBy, $sortDirection)

            ->paginate(10)

            ->withQueryString();

        return view('kategori.index', compact(
            'kategoris',
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
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriRequest $request)
    {
        Kategori::create($request->validated());

        return redirect()
            ->route('kategori.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateKategoriRequest $request,
        Kategori $kategori
    ) {

        $kategori->update(
            $request->validated()
        );

        return redirect()
            ->route('kategori.index')
            ->with('success', 'Kategori berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        if ($kategori->produks()->exists()) {

            return redirect()
                ->route('kategori.index')
                ->with(
                    'error',
                    'Kategori tidak dapat dihapus karena masih memiliki produk.'
                );

        }

        $kategori->delete();

        return redirect()
            ->route('kategori.index')
            ->with(
                'success',
                'Kategori berhasil dihapus.'
            );
    }
}