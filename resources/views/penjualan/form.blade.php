@csrf

<div class="row">

    <div class="col-md-12 mb-3">

        <label class="form-label fw-bold">
            Produk
            <span class="text-danger">*</span>
        </label>

        <select
            name="produk_id"
            id="produk_id"
            class="form-select @error('produk_id') is-invalid @enderror">

            <option value="">-- Pilih Produk --</option>

            @foreach($produks as $produk)

                <option
                    value="{{ $produk->id }}"
                    data-harga="{{ $produk->harga }}"
                    @selected(old('produk_id', $penjualan->produk_id ?? '') == $produk->id)>

                    {{ $produk->kode_produk }} - {{ $produk->nama_produk }}

                </option>

            @endforeach

        </select>

        @error('produk_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="col-md-12 mb-3">

        <label class="form-label fw-bold">
            Harga
        </label>

        <input
            type="number"
            id="harga"
            class="form-control"
            placeholder="Harga produk"
            readonly
            value="{{ old('harga', $penjualan->harga ?? '') }}">

    </div>

    <div class="col-md-12 mb-3">

        <label class="form-label fw-bold">
            Jumlah
            <span class="text-danger">*</span>
        </label>

        <input
            type="number"
            name="jumlah"
            id="jumlah"
            class="form-control @error('jumlah') is-invalid @enderror"
            placeholder="Masukkan jumlah pembelian"
            value="{{ old('jumlah', $penjualan->jumlah ?? '') }}"
            min="1">

        @error('jumlah')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="col-md-12 mb-3">

        <label class="form-label fw-bold">
            Total
        </label>

        <input
            type="number"
            id="total"
            class="form-control"
            placeholder="Total otomatis"
            readonly
            value="{{ old('total', $penjualan->total ?? '') }}">

    </div>

    <div class="col-md-12 mb-3">

        <label class="form-label fw-bold">
            Tanggal
            <span class="text-danger">*</span>
        </label>

        <input
            type="date"
            name="tanggal"
            class="form-control @error('tanggal') is-invalid @enderror"
            value="{{ old('tanggal', isset($penjualan) ? \Carbon\Carbon::parse($penjualan->tanggal)->format('Y-m-d') : now()->format('Y-m-d')) }}">

        @error('tanggal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

</div>

<div class="d-flex justify-content-end gap-2">

    <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
        Kembali
    </a>

    <button type="submit" class="btn btn-primary btn-submit">
        <i class="fas fa-save"></i>
        {{ $button ?? 'Simpan' }}
    </button>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const produk = document.getElementById('produk_id');
    const harga = document.getElementById('harga');
    const jumlah = document.getElementById('jumlah');
    const total = document.getElementById('total');

    function hitungTotal() {

        let selected = produk.options[produk.selectedIndex];
        let h = Number(selected.dataset.harga ?? 0);

        harga.value = h;
        total.value = h * Number(jumlah.value);

    }

    produk.addEventListener('change', hitungTotal);
    jumlah.addEventListener('keyup', hitungTotal);
    jumlah.addEventListener('change', hitungTotal);

    hitungTotal();

});
</script>