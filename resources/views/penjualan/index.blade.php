@extends('adminlte::page')

@section('title', 'Data Penjualan')


@section('content_header')

<div class="d-flex justify-content-between align-items-center">

    <div>

        <h1 class="mb-1">

            <i class="fas fa-shopping-cart text-primary"></i>

            Data Penjualan

        </h1>


        <small class="text-muted">

            Kelola seluruh transaksi penjualan

        </small>


    </div>



    <a href="{{ route('penjualan.create') }}"
       class="btn btn-primary shadow">


        <i class="fas fa-plus-circle me-1"></i>


        Tambah Penjualan


    </a>


</div>


@stop





@section('content')



@if(session('success'))


<div class="alert alert-success alert-dismissible fade show">


    <i class="fas fa-check-circle me-2"></i>


    {{ session('success') }}



    <button class="btn-close"
            data-bs-dismiss="alert">

    </button>


</div>


@endif





{{-- Statistik --}}

<div class="row mb-3">


    <div class="col-lg-4 col-md-6">


        <div class="small-box bg-primary">


            <div class="inner">


                <h3>

                    {{ $penjualans->total() }}

                </h3>


                <p>

                    Total Transaksi

                </p>


            </div>



            <div class="icon">


                <i class="fas fa-shopping-cart"></i>


            </div>


        </div>


    </div>






    <div class="col-lg-4 col-md-6">


        <div class="small-box bg-success">


            <div class="inner">


                <h3>

                    Rp {{ number_format($penjualans->sum('total'),0,',','.') }}

                </h3>


                <p>

                    Total Penjualan

                </p>


            </div>



            <div class="icon">


                <i class="fas fa-money-bill-wave"></i>


            </div>


        </div>


    </div>






    <div class="col-lg-4 col-md-6">


        <div class="small-box bg-info">


            <div class="inner">


                <h3>

                    {{ $penjualans->count() }}

                </h3>


                <p>

                    Transaksi Halaman Ini

                </p>


            </div>



            <div class="icon">


                <i class="fas fa-receipt"></i>


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


                    Daftar Penjualan



                </h3>



            </div>






            <div class="col-md-6">


                <form method="GET"
                      action="{{ route('penjualan.index') }}">


                    <div class="input-group">



                        <input

                            type="text"

                            class="form-control"

                            name="search"

                            value="{{ request('search') }}"

                            placeholder="Cari transaksi atau produk..."

                        >



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



                    <th width="70">

                        No

                    </th>


                    <th>

                        Nomor Transaksi

                    </th>


                    <th>

                        Tanggal

                    </th>


                    <th>

                        Produk

                    </th>


                    <th class="text-end">

                        Total

                    </th>


                    <th width="150"
                        class="text-center">

                        Aksi

                    </th>



                </tr>



                </thead>







                <tbody>



                @forelse($penjualans as $penjualan)



                <tr>



                    <td>


                        {{ $loop->iteration + $penjualans->firstItem() - 1 }}


                    </td>





                    <td>


                        <span class="badge bg-secondary">


                            {{ $penjualan->nomor_transaksi }}


                        </span>


                    </td>





                    <td>



                        {{ \Carbon\Carbon::parse($penjualan->tanggal)->format('d-m-Y') }}



                    </td>







                    <td>



                        @foreach($penjualan->detailPenjualans as $detail)


                            <span class="badge bg-info mb-1">


                                {{ $detail->produk->nama_produk }}


                                ({{ $detail->jumlah }})


                            </span>



                        @endforeach



                    </td>






                    <td class="text-end fw-bold text-success">



                        Rp {{ number_format($penjualan->total,0,',','.') }}



                    </td>






                    <td class="text-center">

    {{-- Detail --}}
    <a href="{{ route('penjualan.show',$penjualan) }}"
       class="btn btn-outline-info btn-sm">

        <i class="fas fa-eye"></i>

    </a>


    {{-- Edit --}}
    <a href="{{ route('penjualan.edit',$penjualan) }}"
       class="btn btn-outline-warning btn-sm">

        <i class="fas fa-edit"></i>

    </a>



    {{-- Delete --}}
    <form action="{{ route('penjualan.destroy',$penjualan) }}"
          method="POST"
          class="d-inline">


        @csrf

        @method('DELETE')


        <button type="button"
                class="btn btn-outline-danger btn-sm btn-delete">


            <i class="fas fa-trash"></i>


        </button>


    </form>


</td>




                </tr>





                @empty




                <tr>


                    <td colspan="6">



                        <div class="text-center py-5">



                            <i class="fas fa-shopping-cart fa-5x text-secondary mb-3"></i>



                            <h4>


                                Belum Ada Transaksi



                            </h4>



                            <p class="text-muted">


                                Silakan tambahkan transaksi penjualan pertama.


                            </p>



                            <a href="{{ route('penjualan.create') }}"

                               class="btn btn-primary">


                                <i class="fas fa-plus-circle"></i>


                                Tambah Penjualan


                            </a>



                        </div>



                    </td>



                </tr>



                @endforelse



                </tbody>




            </table>



        </div>



    </div>







    @if($penjualans->count())



    <div class="card-footer d-flex justify-content-between align-items-center flex-wrap">



        <div>


            Menampilkan


            <strong>{{ $penjualans->firstItem() }}</strong>


            -


            <strong>{{ $penjualans->lastItem() }}</strong>



            dari



            <strong>{{ $penjualans->total() }}</strong>


            data



        </div>





        {{ $penjualans->links() }}



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


                title:'Hapus Transaksi?',


                text:'Data transaksi akan dihapus dan stok akan dikembalikan.',


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