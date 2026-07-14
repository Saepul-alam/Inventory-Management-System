@csrf

<div class="row">

    <div class="col-md-12 mb-3">

        <label class="form-label fw-bold">
            Nama Kategori
            <span class="text-danger">*</span>
        </label>

        <input
            type="text"
            name="nama_kategori"
            class="form-control @error('nama_kategori') is-invalid @enderror"
            placeholder="Masukkan nama kategori"
            value="{{ old('nama_kategori', $kategori->nama_kategori ?? '') }}"
            autofocus>

        @error('nama_kategori')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="col-md-12 mb-3">

        <label class="form-label fw-bold">
            Deskripsi
        </label>

        <textarea
            name="deskripsi"
            rows="4"
            class="form-control @error('deskripsi') is-invalid @enderror"
            placeholder="Masukkan deskripsi kategori">{{ old('deskripsi', $kategori->deskripsi ?? '') }}</textarea>

        @error('deskripsi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

</div>

<div class="d-flex justify-content-end gap-2">

    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
        Kembali
    </a>

    <button type="submit" class="btn btn-primary btn-submit">
        <i class="fas fa-save"></i>
        {{ $button }}
    </button>

</div>