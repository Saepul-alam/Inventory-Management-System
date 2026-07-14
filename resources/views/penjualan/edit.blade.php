@extends('adminlte::page')

@section('title','Edit Penjualan')


@section('content_header')

<div class="d-flex justify-content-between align-items-center">

    <div>

        <h1>
            <i class="fas fa-edit text-warning"></i>
            Edit Penjualan
        </h1>

        <small class="text-muted">
            Perbarui data transaksi penjualan
        </small>

    </div>


    <a href="{{ route('penjualan.index') }}"
       class="btn btn-secondary">

        <i class="fas fa-arrow-left"></i>
        Kembali

    </a>


</div>

@stop



@section('content')


<form action="{{ route('penjualan.update',$penjualan) }}"
      method="POST">


@csrf

@method('PUT')



<div class="card shadow">


<div class="card-header bg-warning">

<h3 class="card-title">

<i class="fas fa-shopping-cart"></i>

Form Edit Penjualan

</h3>


</div>



<div class="card-body">



{{-- Tanggal --}}

<div class="row mb-4">


<div class="col-md-4">


<label>
Tanggal Transaksi
</label>


<input type="date"
       name="tanggal"
       class="form-control"
       value="{{ $penjualan->tanggal }}">


</div>


</div>




<hr>


<h5>

<i class="fas fa-box"></i>

Daftar Produk

</h5>



<div id="produk-wrapper">



@foreach($penjualan->detailPenjualans as $detail)


<div class="row mb-3 produk-item">


<div class="col-md-5">


<label>
Produk
</label>


<select name="produk_id[]"
        class="form-control">


@foreach($produks as $produk)


<option value="{{ $produk->id }}"

@if($produk->id == $detail->produk_id)

selected

@endif

>

{{ $produk->nama_produk }}

-
Rp {{ number_format($produk->harga,0,',','.') }}


</option>


@endforeach


</select>


</div>



<div class="col-md-3">


<label>
Jumlah
</label>


<input type="number"
       name="jumlah[]"
       class="form-control"
       min="1"
       value="{{ $detail->jumlah }}">


</div>



<div class="col-md-2 d-flex align-items-end">


<button type="button"
        class="btn btn-danger btn-remove">


<i class="fas fa-trash"></i>

</button>


</div>


</div>


@endforeach



</div>




<button type="button"
        id="btnTambah"
        class="btn btn-success mt-3">


<i class="fas fa-plus"></i>

Tambah Produk


</button>




</div>




<div class="card-footer text-end">


<button class="btn btn-warning">


<i class="fas fa-save"></i>

Update Transaksi


</button>


</div>



</div>



</form>



@stop





@section('js')


<script>


document.addEventListener(
'DOMContentLoaded',
function(){



let wrapper =
document.getElementById(
'produk-wrapper'
);



let btnTambah =
document.getElementById(
'btnTambah'
);




btnTambah.addEventListener(
'click',
function(){



let html = `


<div class="row mb-3 produk-item">


<div class="col-md-5">


<select name="produk_id[]"
class="form-control">


@foreach($produks as $produk)

<option value="{{ $produk->id }}">

{{ $produk->nama_produk }}

-
Rp {{ number_format($produk->harga,0,',','.') }}

</option>


@endforeach


</select>


</div>



<div class="col-md-3">


<input type="number"
name="jumlah[]"
class="form-control"
min="1"
value="1">


</div>



<div class="col-md-2">


<button type="button"
class="btn btn-danger btn-remove">


<i class="fas fa-trash"></i>


</button>


</div>



</div>



`;



wrapper.insertAdjacentHTML(
'beforeend',
html
);



});





document.addEventListener(
'click',
function(e){


if(
e.target.closest('.btn-remove')
){


e.target.closest('.produk-item')
.remove();


}



});


});


</script>


@stop