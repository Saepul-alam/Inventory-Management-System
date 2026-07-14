@csrf

<div class="row">

    {{-- Kategori --}}
    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold">
            Kategori <span class="text-danger">*</span>
        </label>

        <select
            name="kategori_id"
            class="form-select @error('kategori_id') is-invalid @enderror">

            <option value="">-- Pilih Kategori --</option>

            @foreach ($kategoris as $kategori)
                <option
                    value="{{ $kategori->id }}"
                    {{ old('kategori_id', $produk->kategori_id ?? '') == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach

        </select>

        @error('kategori_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    {{-- Kode Produk --}}
    <div class="col-md-6 mb-3">

        <label class="form-label fw-bold">
            Kode Produk <span class="text-danger">*</span>
        </label>

        <input
            type="text"
            name="kode_produk"
            class="form-control @error('kode_produk') is-invalid @enderror"
            value="{{ old('kode_produk', $produk->kode_produk ?? '') }}"
            placeholder="Contoh : PRD001">

        @error('kode_produk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    {{-- Nama Produk --}}
    <div class="col-md-12 mb-3">

        <label class="form-label fw-bold">
            Nama Produk <span class="text-danger">*</span>
        </label>

        <input
            type="text"
            name="nama_produk"
            class="form-control @error('nama_produk') is-invalid @enderror"
            value="{{ old('nama_produk', $produk->nama_produk ?? '') }}"
            placeholder="Masukkan nama produk">

        @error('nama_produk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    {{-- Harga --}}
    <div class="col-md-6 mb-3">

        <label class="form-label fw-bold">
            Harga <span class="text-danger">*</span>
        </label>

        <input
            type="number"
            name="harga"
            class="form-control @error('harga') is-invalid @enderror"
            value="{{ old('harga', $produk->harga ?? '') }}"
            placeholder="0">

        @error('harga')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    {{-- Stok --}}
    <div class="col-md-6 mb-3">

        <label class="form-label fw-bold">
            Stok <span class="text-danger">*</span>
        </label>

        <input
            type="number"
            name="stok"
            class="form-control @error('stok') is-invalid @enderror"
            value="{{ old('stok', $produk->stok ?? '') }}"
            placeholder="0">

        @error('stok')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

</div>

<hr>

<div class="text-end">

    <a href="{{ route('produk.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
        Kembali
    </a>

    <button type="submit" class="btn btn-primary btn-submit">
        <i class="fas fa-save"></i>
        {{ $button }}
    </button>

</div>