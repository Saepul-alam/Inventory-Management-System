<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateKategoriRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $kategori = $this->route('kategori');

        return [
            'nama_kategori' => [
                'required',
                'string',
                'max:100',
                Rule::unique('kategoris', 'nama_kategori')
                    ->ignore($kategori->id),
            ],

            'deskripsi' => [
                'nullable',
                'string',
                'max:500',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
            'nama_kategori.unique'   => 'Nama kategori sudah digunakan.',
        ];
    }
}