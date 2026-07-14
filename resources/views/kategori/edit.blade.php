@extends('adminlte::page')

@section('title', 'Edit Kategori')

@section('content_header')

<h1>

<i class="fas fa-edit text-warning"></i>

Edit Kategori

</h1>

@stop

@section('content')

<div class="card shadow">

    <div class="card-header">

        <h3 class="card-title">

            Form Edit Kategori

        </h3>

    </div>

    <form
        action="{{ route('kategori.update',$kategori) }}"
        method="POST">

        @csrf
        @method('PUT')

        <div class="card-body">

            @include('kategori.form',[
                'button'=>'Update'
            ])

        </div>

    </form>

</div>

@stop