@extends('adminlte::page')

@section('title', 'Tambah Kategori')

@section('content_header')

<h1>
    <i class="fas fa-plus-circle text-primary"></i>
    Tambah Kategori
</h1>

@stop

@section('content')

<div class="card shadow">

    <div class="card-header">

        <h3 class="card-title">

            Form Tambah Kategori

        </h3>

    </div>

    <form action="{{ route('kategori.store') }}" method="POST">

        <div class="card-body">

            @include('kategori.form',[
                'button'=>'Simpan'
            ])

        </div>

    </form>

</div>

@stop