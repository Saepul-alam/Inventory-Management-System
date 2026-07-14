@extends('adminlte::page')

@section('title', 'Detail Produk')


@section('content_header')

<div class="d-flex justify-content-between align-items-center">

    <div>
        <h1 class="mb-1">
            <i class="fas fa-box-open text-primary"></i>
            Detail Produk
        </h1>

        <small class="text-muted">
            Informasi lengkap produk
        </small>
    </div>


    <a href="{{ route('produk.index') }}"
       class="btn btn-secondary">

        <i class="fas fa-arrow-left"></i>
        Kembali

    </a>

</div>

@stop



@section('content')


<div class="card shadow">


    <div class="card-header bg-primary text-white">

        <h3 class="card-title">

            <i class="fas fa-info-circle"></i>

            {{ $produk->nama_produk }}

        </h3>

    </div>



    <div class="card-body">


        <div class="row">


            {{-- Kode Produk --}}
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Kode Produk
                </label>

                <div>

                    <span class="badge bg-secondary fs-6">

                        {{ $produk->kode_produk }}

                    </span>

                </div>

            </div>



            {{-- Kategori --}}
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Kategori
                </label>

                <div>

                    <span class="badge bg-info fs-6">

                        {{ $produk->kategori->nama_kategori }}

                    </span>

                </div>

            </div>




            {{-- Nama Produk --}}
            <div class="col-md-12 mb-3">

                <label class="fw-bold">
                    Nama Produk
                </label>

                <p>

                    {{ $produk->nama_produk }}

                </p>

            </div>





            {{-- Harga --}}
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Harga
                </label>

                <p class="text-success fw-bold">

                    Rp {{ number_format($produk->harga,0,',','.') }}

                </p>

            </div>





            {{-- Stok --}}
            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Stok
                </label>


                <div>

                @if($produk->stok > 20)

                    <span class="badge bg-success fs-6">

                        {{ $produk->stok }}

                    </span>


                @elseif($produk->stok > 5)

                    <span class="badge bg-warning fs-6">

                        {{ $produk->stok }}

                    </span>


                @else

                    <span class="badge bg-danger fs-6">

                        {{ $produk->stok }}

                    </span>


                @endif

                </div>


            </div>


        </div>


    </div>



    <div class="card-footer text-end">


        <a href="{{ route('produk.edit',$produk) }}"
           class="btn btn-warning">

            <i class="fas fa-edit"></i>

            Edit Produk

        </a>


    </div>


</div>


@stop