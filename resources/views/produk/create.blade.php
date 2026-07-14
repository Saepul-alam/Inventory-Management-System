@extends('adminlte::page')

@section('title', 'Tambah Produk')

@section('content_header')

<div class="d-flex justify-content-between align-items-center">

    <h1>
        <i class="fas fa-box text-primary"></i>
        Tambah Produk
    </h1>

</div>

@stop

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white">

        <h3 class="card-title">
            Form Tambah Produk
        </h3>

    </div>

    <form action="{{ route('produk.store') }}" method="POST">

        <div class="card-body">

            @include('produk.form',[
                'button' => 'Simpan'
            ])

        </div>

    </form>

</div>

@stop