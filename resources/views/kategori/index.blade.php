@extends('adminlte::page')

@section('title', 'Data Kategori')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <div>
        <h1 class="mb-1">
            <i class="fas fa-tags text-primary"></i>
            Data Kategori
        </h1>
        <small class="text-muted">
            Kelola seluruh kategori produk
        </small>
    </div>

    <a href="{{ route('kategori.create') }}" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus-circle"></i>
        Tambah Kategori
    </a>
</div>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fas fa-check-circle me-2"></i>
    {{ session('success') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close">
    </button>
</div>
@endif

<div class="card shadow">

    <div class="card-header">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h3 class="card-title">

                    <i class="fas fa-list me-1"></i>

                    Daftar Kategori

                    <span class="badge rounded-pill bg-primary ms-2">

                        {{ $kategoris->total() }}

                    </span>

                </h3>

            </div>

            <div class="col-md-6">

                <form action="{{ route('kategori.index') }}" method="GET">

                    <div class="input-group">

                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            placeholder="Cari kategori..."
                            value="{{ request('search') }}">

                        <button class="btn btn-outline-primary">

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

                        <th>Nama Kategori</th>

                        <th>Deskripsi</th>

                        <th width="180" class="text-center">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                @forelse($kategoris as $kategori)

                    <tr>

                        <td>

                            {{ $loop->iteration + $kategoris->firstItem() - 1 }}

                        </td>

                        <td>

                            <strong>

                                {{ $kategori->nama_kategori }}

                            </strong>

                        </td>

                        <td>

                            {{ $kategori->deskripsi }}

                        </td>

                        <td class="text-center">

                            <a href="{{ route('kategori.show', $kategori) }}"
                               class="btn btn-outline-info btn-sm"
                               data-bs-toggle="tooltip"
                               title="Detail">

                                <i class="fas fa-eye"></i>

                            </a>

                            <a href="{{ route('kategori.edit', $kategori) }}"
                               class="btn btn-outline-warning btn-sm"
                               data-bs-toggle="tooltip"
                               title="Edit">

                                <i class="fas fa-edit"></i>

                            </a>

                            <form action="{{ route('kategori.destroy', $kategori) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <!-- <button
                                    type="button"
                                    class="btn btn-outline-danger btn-sm btn-delete"
                                    data-bs-toggle="tooltip"
                                    title="Hapus">

                                    <i class="fas fa-trash"></i>

                                </button> -->
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

                        <td colspan="4">

                            <div class="text-center py-5">

                                <i class="fas fa-folder-open fa-5x text-secondary mb-3"></i>

                                <h4>

                                    Belum Ada Data Kategori

                                </h4>

                                <p class="text-muted">

                                    Silakan klik tombol
                                    <strong>Tambah Kategori</strong>
                                    untuk menambahkan data pertama.

                                </p>

                                <a href="{{ route('kategori.create') }}"
                                   class="btn btn-primary">

                                    <i class="fas fa-plus-circle"></i>

                                    Tambah Kategori

                                </a>

                            </div>

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

    @if($kategoris->count())

    <div class="card-footer d-flex justify-content-between align-items-center flex-wrap">

        <div class="text-muted mb-2 mb-md-0">

            Menampilkan

            <strong>{{ $kategoris->firstItem() }}</strong>

            -

            <strong>{{ $kategoris->lastItem() }}</strong>

            dari

            <strong>{{ $kategoris->total() }}</strong>

            data

        </div>

        {{ $kategoris->links() }}

    </div>

    @endif

</div>

@stop

@push('js')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

document.addEventListener("DOMContentLoaded", function () {

    // Tooltip Bootstrap
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (el) {
        new bootstrap.Tooltip(el);
    });

    // Delete Confirmation
    document.querySelectorAll('.btn-delete').forEach(function (btn) {

        btn.addEventListener('click', function () {

            let form = this.closest('form');

            Swal.fire({

                title: 'Hapus Data?',

                text: 'Data yang sudah dihapus tidak dapat dikembalikan.',

                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#dc3545',

                cancelButtonColor: '#6c757d',

                confirmButtonText: 'Ya, Hapus',

                cancelButtonText: 'Batal',

                reverseButtons: true

            }).then((result) => {

                if(result.isConfirmed){

                    form.submit();

                }

            });

        });

    });

});

</script>

@endpush

<!-- @section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {

    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));

    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

});
</script>
@stop -->
