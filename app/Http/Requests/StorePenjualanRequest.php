<?php

namespace App\Http\Requests;

use App\Models\Produk;
use Illuminate\Foundation\Http\FormRequest;

class StorePenjualanRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }



    public function rules(): array
    {
        return [

            'tanggal' => [
                'required',
                'date'
            ],


            'produk_id' => [
                'required',
                'array'
            ],


            'produk_id.*' => [
                'required',
                'exists:produks,id'
            ],


            'jumlah' => [
                'required',
                'array'
            ],


            'jumlah.*' => [
                'required',
                'integer',
                'min:1'
            ],

        ];
    }



    public function messages(): array
    {
        return [

            'produk_id.required'
                => 'Produk harus dipilih.',


            'jumlah.required'
                => 'Jumlah produk harus diisi.',


            'jumlah.*.min'
                => 'Jumlah minimal 1.',

        ];
    }



    protected function prepareForValidation()
    {

        if(!is_array($this->produk_id))
        {

            $this->merge([
                'produk_id'=>[
                    $this->produk_id
                ]
            ]);

        }



        if(!is_array($this->jumlah))
        {

            $this->merge([
                'jumlah'=>[
                    $this->jumlah
                ]
            ]);

        }

    }



}