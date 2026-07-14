@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<div class="container-fluid">


    {{-- Statistik --}}

    <div class="row">


        {{-- Total Kategori --}}

        <div class="col-lg-3 col-md-6">

            <div class="small-box bg-primary">

                <div class="inner">

                    <h3>
                        {{ $jumlahKategori }}
                    </h3>

                    <p>
                        Total Kategori
                    </p>

                </div>


                <div class="icon">
                    <i class="fas fa-tags"></i>
                </div>


                <a href="{{ route('kategori.index') }}"
                   class="small-box-footer">

                    Lihat Detail
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>




        {{-- Total Produk --}}

        <div class="col-lg-3 col-md-6">

            <div class="small-box bg-success">

                <div class="inner">

                    <h3>
                        {{ $jumlahProduk }}
                    </h3>

                    <p>
                        Total Produk
                    </p>

                </div>


                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>


                <a href="{{ route('produk.index') }}"
                   class="small-box-footer">

                    Lihat Detail
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>




        {{-- Total Transaksi --}}

        <div class="col-lg-3 col-md-6">

            <div class="small-box bg-warning">

                <div class="inner">

                    <h3>
                        {{ $jumlahTransaksi }}
                    </h3>

                    <p>
                        Total Transaksi
                    </p>

                </div>


                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>


                <a href="{{ route('penjualan.index') }}"
                   class="small-box-footer">

                    Lihat Detail
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>




        {{-- Total Penjualan --}}

        <div class="col-lg-3 col-md-6">

            <div class="small-box bg-danger">

                <div class="inner">

                    <h3>
                        Rp {{ number_format($totalPenjualan, 0, ',', '.') }}
                    </h3>

                    <p>
                        Total Penjualan
                    </p>

                </div>


                <div class="icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>


                <a href="{{ route('penjualan.index') }}"
                   class="small-box-footer">

                    Lihat Detail
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>


    </div>





    {{-- Detail Dashboard --}}

    <div class="row mt-3">


        {{-- Stok Menipis --}}

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">

                    <h5 class="mb-0">

                        <i class="fas fa-box-open"></i>
                        Produk Stok Menipis

                    </h5>

                </div>


                <div class="card-body p-0">

                    <table class="table table-hover mb-0">

                        <thead class="table-light">

                            <tr>

                                <th>
                                    Produk
                                </th>

                                <th width="100">
                                    Stok
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($stokMenipis as $produk)

                            <tr>

                                <td>
                                    {{ $produk->nama_produk }}
                                </td>


                                <td>

                                    <span class="badge bg-danger">
                                        {{ $produk->stok }}
                                    </span>

                                </td>

                            </tr>


                            @empty

                            <tr>

                                <td colspan="2"
                                    class="text-center py-3">

                                    Tidak ada stok menipis

                                </td>

                            </tr>


                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>





        {{-- Transaksi Terbaru --}}

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-success text-white">

                    <h5 class="mb-0">

                        <i class="fas fa-shopping-cart"></i>
                        Transaksi Terbaru

                    </h5>

                </div>



                <div class="card-body p-0">

                    <table class="table table-hover mb-0">


                        <thead class="table-light">

                            <tr>

                                <th>
                                    No Transaksi
                                </th>

                                <th>
                                    Produk
                                </th>

                                <th>
                                    Total
                                </th>

                            </tr>

                        </thead>



                        <tbody>


                            @forelse($transaksiTerbaru as $item)

                            <tr>

                                <td>
                                    {{ $item->nomor_transaksi }}
                                </td>



                                <td>

                                    @if($item->detailPenjualans->count())

                                        {{ $item->detailPenjualans
                                            ->first()
                                            ->produk
                                            ->nama_produk
                                        }}


                                        @if($item->detailPenjualans->count() > 1)

                                            <small class="text-muted">

                                                +{{ $item->detailPenjualans->count() - 1 }}
                                                produk lainnya

                                            </small>

                                        @endif

                                    @else

                                        <span class="text-muted">
                                            Tidak ada produk
                                        </span>

                                    @endif

                                </td>



                                <td>

                                    <strong class="text-success">

                                        Rp {{ number_format($item->total, 0, ',', '.') }}

                                    </strong>

                                </td>

                            </tr>



                            @empty


                            <tr>

                                <td colspan="3"
                                    class="text-center py-3">

                                    Belum ada transaksi

                                </td>

                            </tr>


                            @endforelse


                        </tbody>


                    </table>


                </div>


            </div>


        </div>


    </div>


</div>


@endsection