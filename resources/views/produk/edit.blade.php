@extends('adminlte::page')

@section('title', 'Edit Produk')


@section('content_header')

<div class="d-flex justify-content-between align-items-center">

    <div>

        <h1 class="mb-1">

            <i class="fas fa-edit text-warning"></i>

            Edit Produk

        </h1>

        <small class="text-muted">

            Perbarui data produk

        </small>

    </div>


</div>

@stop



@section('content')


<div class="card shadow">


    <div class="card-header bg-warning">

        <h3 class="card-title">

            <i class="fas fa-edit"></i>

            Form Edit Produk

        </h3>

    </div>



    <form action="{{ route('produk.update',$produk) }}"
          method="POST">


        @csrf

        @method('PUT')



        <div class="card-body">


            @include('produk.form', [

                'button' => 'Update Produk'

            ])


        </div>


    </form>


</div>


@stop