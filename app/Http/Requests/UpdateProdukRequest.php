<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProdukRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $produk = $this->route('produk');

        return [

            'kategori_id' => [
                'required',
                'exists:kategoris,id',
            ],

            'kode_produk' => [
                'required',
                'string',
                'max:50',
                Rule::unique('produks', 'kode_produk')
                    ->ignore($produk->id),
            ],

            'nama_produk' => [
                'required',
                'string',
                'max:150',
            ],

            'harga' => [
                'required',
                'numeric',
                'min:0',
            ],

            'stok' => [
                'required',
                'integer',
                'min:0',
            ],

        ];
    }

    public function messages(): array
    {
        return [
            'kategori_id.required' => 'Kategori wajib dipilih.',
            'kategori_id.exists'   => 'Kategori tidak ditemukan.',

            'kode_produk.required' => 'Kode produk wajib diisi.',
            'kode_produk.unique'   => 'Kode produk sudah digunakan.',

            'nama_produk.required' => 'Nama produk wajib diisi.',

            'harga.required' => 'Harga wajib diisi.',
            'harga.numeric'  => 'Harga harus berupa angka.',

            'stok.required' => 'Stok wajib diisi.',
            'stok.integer'  => 'Stok harus berupa bilangan bulat.',
        ];
    }
}