<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LokaHastaKaryaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap' => 'required|string',
            'email' => 'required|string|email',
            'nomor_wa' => [
                'required',
                'numeric',
                'regex:/^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$/',
            ],
            'instansi_komunitas' => 'required|string',
            'media_sosial' => 'required|string',
            'bentuk_karya' => 'required|string',
            'judul_karya' => 'required|string',
            'deskripsi_karya' => 'required|string',
            'tahun_pembuatan_karya' => 'required|numeric',
            'file_karya' => 'required|string',
            'sumber_informasi' => 'required|string'
        ];
    }

    /**
     * Get the validation messages from the specified rules.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Mohon mengisi nama lengkap.',
            'email.required' => 'Mohon mengisi email.',
            'nomor_wa.required' => 'Mohon mengisi nomor whatsapp.',
            'nomor_wa.regex' => 'Mohon sertakan nomor whatsapp yang valid.',
            'instansi_komunitas.required' => 'Mohon mengisi asal instansi atau komunitas.',
            'media_sosial.required' => 'Mohon mengisi media sosal.',
            'bentuk_karya.required' => 'Mohon mengisi bentuk karya',
            'judul_karya.required' => 'Mohon mengisi judul karya',
            'deskripsi_karya.required' => 'Mohon mengisi deskripsi karya',
            'tahun_pembuatan_karya.required' => 'Mohon mengisi tahun pembuatan karya',
            'file_karya.required' => 'Mohon mengupload file karya.',
            'sumber_informasi.required' => 'Mohon sebutkan sumber informasi anda.'
        ];
    }
}
