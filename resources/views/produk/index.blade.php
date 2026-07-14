@extends('adminlte::page')

@section('title', 'Data Produk')

@section('content_header')

<div class="d-flex justify-content-between align-items-center">

    <div>

        <h1 class="mb-1">
            <i class="fas fa-box text-primary"></i>
            Data Produk
        </h1>

        <small class="text-muted">
            Kelola seluruh data produk
        </small>

    </div>

    <a href="{{ route('produk.create') }}" class="btn btn-primary shadow">

        <i class="fas fa-plus-circle me-1"></i>

        Tambah Produk

    </a>

</div>

@stop

@section('content')

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show">

    <i class="fas fa-check-circle me-2"></i>

    {{ session('success') }}

    <button class="btn-close" data-bs-dismiss="alert"></button>

</div>

@endif

{{-- Statistik --}}
<div class="row mb-3">

    <div class="col-lg-3 col-md-6">

        <div class="small-box bg-primary">

            <div class="inner">

                <h3>{{ $produks->total() }}</h3>

                <p>Total Produk</p>

            </div>

            <div class="icon">

                <i class="fas fa-box"></i>

            </div>

        </div>

    </div>

</div>

<div class="card shadow">

    <div class="card-header">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h3 class="card-title">

                    <i class="fas fa-list"></i>

                    Daftar Produk

                </h3>

            </div>

            <div class="col-md-6">

                <form method="GET"
                      action="{{ route('produk.index') }}">

                    <div class="input-group">

                        <input
                            type="text"
                            class="form-control"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Cari kode, nama, kategori...">

                        <button class="btn btn-primary">

                            <i class="fas fa-search"></i>

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover table-striped align-middle mb-0">

                <thead class="table-light">

                <tr>

                    <th width="70">No</th>

                    <th>Kode</th>

                    <th>Nama Produk</th>

                    <th>Kategori</th>

                    <th class="text-end">Harga</th>

                    <th class="text-center">Stok</th>

                    <th width="180" class="text-center">

                        Aksi

                    </th>

                </tr>

                </thead>

                <tbody>

                @forelse($produks as $produk)

                <tr>

                    <td>

                        {{ $loop->iteration + $produks->firstItem() - 1 }}

                    </td>

                    <td>

                        <span class="badge bg-secondary">

                            {{ $produk->kode_produk }}

                        </span>

                    </td>

                    <td>

                        <strong>

                            {{ $produk->nama_produk }}

                        </strong>

                    </td>

                    <td>

                        <span class="badge bg-info">

                            {{ $produk->kategori->nama_kategori }}

                        </span>

                    </td>

                    <td class="text-end fw-bold text-success">

                        Rp {{ number_format($produk->harga,0,',','.') }}

                    </td>

                    <td class="text-center">

                        @if($produk->stok > 20)

                            <span class="badge bg-success">

                                {{ $produk->stok }}

                            </span>

                        @elseif($produk->stok > 5)

                            <span class="badge bg-warning">

                                {{ $produk->stok }}

                            </span>

                        @else

                            <span class="badge bg-danger">

                                {{ $produk->stok }}

                            </span>

                        @endif

                    </td>

                    <td class="text-center">

                        <a href="{{ route('produk.show',$produk) }}"
                           class="btn btn-outline-info btn-sm">

                            <i class="fas fa-eye"></i>

                        </a>

                        <a href="{{ route('produk.edit',$produk) }}"
                           class="btn btn-outline-warning btn-sm">

                            <i class="fas fa-edit"></i>

                        </a>

                        <form action="{{ route('produk.destroy',$produk) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                type="button"
                                class="btn btn-outline-danger btn-sm btn-delete">

                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="7">

                        <div class="text-center py-5">

                            <i class="fas fa-box-open fa-5x text-secondary mb-3"></i>

                            <h4>

                                Belum Ada Produk

                            </h4>

                            <p class="text-muted">

                                Silakan tambahkan produk pertama.

                            </p>

                            <a href="{{ route('produk.create') }}"
                               class="btn btn-primary">

                                <i class="fas fa-plus-circle"></i>

                                Tambah Produk

                            </a>

                        </div>

                    </td>

                </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

    @if($produks->count())

    <div class="card-footer d-flex justify-content-between align-items-center flex-wrap">

        <div>

            Menampilkan

            <strong>{{ $produks->firstItem() }}</strong>

            -

            <strong>{{ $produks->lastItem() }}</strong>

            dari

            <strong>{{ $produks->total() }}</strong>

            data

        </div>

        {{ $produks->links() }}

    </div>

    @endif

</div>

@stop

@section('js')

<script>

document.addEventListener('DOMContentLoaded',function(){

    document.querySelectorAll('.btn-delete').forEach(function(btn){

        btn.addEventListener('click',function(){

            Swal.fire({

                title:'Hapus Produk?',

                text:'Data tidak dapat dikembalikan.',

                icon:'warning',

                showCancelButton:true,

                confirmButtonText:'Ya, Hapus',

                cancelButtonText:'Batal',

                confirmButtonColor:'#dc3545'

            }).then((result)=>{

                if(result.isConfirmed){

                    btn.closest('form').submit();

                }

            });

        });

    });

});

</script>

@stop