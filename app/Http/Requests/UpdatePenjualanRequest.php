<?php

namespace App\Http\Requests;

use App\Models\Produk;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePenjualanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'produk_id' => [
                'required',
                'exists:produks,id',
            ],

            'jumlah' => [
                'required',
                'integer',
                'min:1',
            ],

            'tanggal' => [
                'required',
                'date',
            ],

        ];
    }

    public function after(): array
    {
        return [
            function ($validator) {

                $produk = Produk::find($this->produk_id);

                if (!$produk) {
                    return;
                }

                // Pada proses update, stok lama akan disesuaikan di Controller.
                // Validasi ini memastikan jumlah yang diminta tetap masuk akal.
                if ($this->jumlah < 1) {
                    $validator->errors()->add(
                        'jumlah',
                        'Jumlah penjualan tidak valid.'
                    );
                }
            },
        ];
    }

    public function messages(): array
    {
        return [

            'produk_id.required' => 'Produk wajib dipilih.',
            'produk_id.exists'   => 'Produk tidak ditemukan.',

            'jumlah.required' => 'Jumlah wajib diisi.',
            'jumlah.integer'  => 'Jumlah harus berupa bilangan bulat.',
            'jumlah.min'      => 'Jumlah minimal 1.',

            'tanggal.required' => 'Tanggal wajib diisi.',
            'tanggal.date'     => 'Tanggal tidak valid.',
        ];
    }
}