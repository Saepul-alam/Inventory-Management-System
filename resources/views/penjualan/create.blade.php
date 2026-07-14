@extends('adminlte::page')

@section('title', 'Tambah Penjualan')

@section('content_header')
<div>
    <h1>
        <i class="fas fa-cart-plus text-primary"></i>
        Tambah Penjualan
    </h1>

    <small class="text-muted">
        Buat transaksi penjualan baru
    </small>
</div>
@stop


@section('content')

<div class="card shadow">

    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-shopping-cart"></i>
            Form Transaksi
        </h3>
    </div>


    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf

        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-4">

                    <label>Tanggal</label>

                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="{{ date('Y-m-d') }}">

                </div>
            </div>


            <hr>


            <h5>
                <i class="fas fa-box"></i>
                Produk
            </h5>


            <table class="table table-bordered" id="produkTable">

                <thead class="table-light">
                    <tr>
                        <th width="40%">Produk</th>
                        <th width="20%">Harga</th>
                        <th width="15%">Jumlah</th>
                        <th width="20%">Subtotal</th>
                        <th width="5%"></th>
                    </tr>
                </thead>


                <tbody>

                    <tr>

                        <td>
                            <select name="produk_id[]"
                                    class="form-control produk">

                                <option value="">
                                    -- Pilih Produk --
                                </option>

                                @foreach($produks as $produk)

                                    <option value="{{ $produk->id }}"
                                            data-harga="{{ $produk->harga }}">

                                        {{ $produk->nama_produk }}
                                        - Stok {{ $produk->stok }}

                                    </option>

                                @endforeach

                            </select>
                        </td>


                        <td>
                            <input type="text"
                                   class="form-control harga"
                                   readonly>
                        </td>


                        <td>
                            <input type="number"
                                   name="jumlah[]"
                                   class="form-control jumlah"
                                   min="1"
                                   value="1">
                        </td>


                        <td>
                            <input type="text"
                                   class="form-control subtotal"
                                   readonly>
                        </td>


                        <td class="text-center">
                            <button type="button"
                                    class="btn btn-danger btn-sm remove">

                                <i class="fas fa-trash"></i>

                            </button>
                        </td>

                    </tr>

                </tbody>

            </table>


            <button type="button"
                    class="btn btn-success"
                    id="addRow">

                <i class="fas fa-plus"></i>
                Tambah Produk

            </button>



            <div class="text-right mt-4">

                <h4>
                    Total :
                    <span class="text-success" id="total">
                        Rp 0
                    </span>
                </h4>

            </div>

        </div>



        <div class="card-footer">

            <button class="btn btn-primary">

                <i class="fas fa-save"></i>
                Simpan Transaksi

            </button>


            <a href="{{ route('penjualan.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </form>

</div>

@stop



@section('js')

<script>

const formatRupiah = number =>
    new Intl.NumberFormat('id-ID').format(number);



function hitungTotal()
{
    let total = 0;


    document
        .querySelectorAll('#produkTable tbody tr')
        .forEach(row => {

            const harga =
                Number(
                    row.querySelector('.harga').value || 0
                );


            const jumlah =
                Number(
                    row.querySelector('.jumlah').value || 0
                );


            const subtotal = harga * jumlah;


            row.querySelector('.subtotal').value =
                `Rp ${formatRupiah(subtotal)}`;


            total += subtotal;

        });


    document.getElementById('total').textContent =
        `Rp ${formatRupiah(total)}`;
}




document.addEventListener('change', function(e){

    if(!e.target.classList.contains('produk')){
        return;
    }


    const option =
        e.target.options[e.target.selectedIndex];


    const row =
        e.target.closest('tr');


    row.querySelector('.harga').value =
        option.dataset.harga ?? 0;


    hitungTotal();

});




document.addEventListener('input', function(e){

    if(e.target.classList.contains('jumlah')){
        hitungTotal();
    }

});




document.getElementById('addRow')
    .addEventListener('click', function(){

        const template =
            document.querySelector('#produkTable tbody tr')
                .cloneNode(true);


        template.querySelector('.produk').value = '';
        template.querySelector('.harga').value = '';
        template.querySelector('.jumlah').value = 1;
        template.querySelector('.subtotal').value = '';


        document
            .querySelector('#produkTable tbody')
            .appendChild(template);

    });




document.addEventListener('click', function(e){

    const button =
        e.target.closest('.remove');


    if(!button){
        return;
    }


    const rows =
        document.querySelectorAll('#produkTable tbody tr');


    if(rows.length > 1){

        button.closest('tr').remove();

        hitungTotal();

    }

});

</script>

@stop