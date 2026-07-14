@extends('adminlte::page')

@section('title', 'Detail Kategori')

@section('content_header')

<h1>

<i class="fas fa-eye text-info"></i>

Detail Kategori

</h1>

@stop

@section('content')

<div class="card shadow">

    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th width="220">Nama Kategori</th>
                <td>{{ $kategori->nama_kategori }}</td>
            </tr>

            <tr>
                <th>Deskripsi</th>
                <td>{{ $kategori->deskripsi ?: '-' }}</td>
            </tr>

            <tr>
                <th>Dibuat</th>
                <td>{{ $kategori->created_at->format('d F Y H:i') }}</td>
            </tr>

            <tr>
                <th>Diupdate</th>
                <td>{{ $kategori->updated_at->format('d F Y H:i') }}</td>
            </tr>

        </table>

    </div>

    <div class="card-footer">

        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">

            <i class="fas fa-arrow-left"></i>

            Kembali

        </a>

        <a href="{{ route('kategori.edit',$kategori) }}" class="btn btn-warning">

            <i class="fas fa-edit"></i>

            Edit

        </a>

    </div>

</div>

@stop