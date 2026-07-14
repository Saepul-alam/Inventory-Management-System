@extends('adminlte::page')

@section('title', 'Detail Penjualan')


@section('content_header')

<div class="d-flex justify-content-between align-items-center">

    <div>

    <a href="{{ route('penjualan.index') }}"
       class="btn btn-secondary">

        <i class="fas fa-arrow-left"></i>

        Kembali

    </a>


    <a href="{{ route('penjualan.edit',$penjualan) }}"
       class="btn btn-warning">

        <i class="fas fa-edit"></i>

        Edit

    </a>


</div>

</div>

@stop



@section('content')

<div class="row">


    {{-- Informasi Transaksi --}}

    <div class="col-md-4">

        <div class="card shadow">

            <div class="card-header bg-primary text-white">

                <h3 class="card-title">
                    <i class="fas fa-info-circle"></i>
                    Informasi Transaksi
                </h3>

            </div>


            <div class="card-body">

                <table class="table table-borderless">

                    <tr>
                        <th width="40%">
                            Nomor
                        </th>

                        <td>
                            <span class="badge bg-primary">
                                {{ $penjualan->nomor_transaksi }}
                            </span>
                        </td>
                    </tr>


                    <tr>
                        <th>
                            Tanggal
                        </th>

                        <td>
                            {{ \Carbon\Carbon::parse($penjualan->tanggal)->format('d-m-Y') }}
                        </td>
                    </tr>


                    <tr>
                        <th>
                            Total
                        </th>

                        <td>
                            <strong class="text-success">
                                Rp {{ number_format($penjualan->total, 0, ',', '.') }}
                            </strong>
                        </td>
                    </tr>

                </table>

            </div>

        </div>

    </div>




    {{-- Detail Produk --}}

    <div class="col-md-8">

        <div class="card shadow">

            <div class="card-header">

                <h3 class="card-title">
                    <i class="fas fa-shopping-cart"></i>
                    Daftar Produk
                </h3>

            </div>



            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-striped table-hover mb-0">

                        <thead class="table-light">

                            <tr>
                                <th width="60">
                                    No
                                </th>

                                <th>
                                    Produk
                                </th>

                                <th>
                                    Harga
                                </th>

                                <th>
                                    Jumlah
                                </th>

                                <th>
                                    Subtotal
                                </th>
                            </tr>

                        </thead>



                        <tbody>

                            @foreach($penjualan->detailPenjualans as $detail)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                <td>

                                    <strong>
                                        {{ $detail->produk->nama_produk }}
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        {{ $detail->produk->kode_produk }}
                                    </small>

                                </td>



                                <td>
                                    Rp {{ number_format($detail->harga, 0, ',', '.') }}
                                </td>



                                <td>

                                    <span class="badge bg-info">
                                        {{ $detail->jumlah }}
                                    </span>

                                </td>



                                <td>

                                    <strong class="text-success">
                                        Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                                    </strong>

                                </td>


                            </tr>

                            @endforeach

                        </tbody>



                        <tfoot>

                            <tr>

                                <th colspan="4"
                                    class="text-end">

                                    TOTAL

                                </th>


                                <th>

                                    <strong class="text-success">
                                        Rp {{ number_format($penjualan->total, 0, ',', '.') }}
                                    </strong>

                                </th>

                            </tr>

                        </tfoot>


                    </table>

                </div>

            </div>

        </div>

    </div>


</div>


@stop