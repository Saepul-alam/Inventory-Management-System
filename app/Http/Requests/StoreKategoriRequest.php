<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKategoriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules.
     */
    public function rules(): array
    {
        return [
            'nama_kategori' => [
                'required',
                'string',
                'max:100',
                'unique:kategoris,nama_kategori',
            ],

            'deskripsi' => [
                'nullable',
                'string',
                'max:500',
            ],
        ];
    }

    /**
     * Custom messages.
     */
    public function messages(): array
    {
        return [
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
            'nama_kategori.unique'   => 'Nama kategori sudah digunakan.',
            'nama_kategori.max'      => 'Nama kategori maksimal 100 karakter.',

            'deskripsi.max'          => 'Deskripsi maksimal 500 karakter.',
        ];
    }
}