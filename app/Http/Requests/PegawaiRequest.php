<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd($this);
        return [
            'pname' => 'required|string|max:20|unique:pegawais,pegawai_nama',
            'pjabatan' => 'required|string|max:10',
            'pumur' => 'required|integer',
            'palamat' => 'required',
            'no_telepon' => 'required|string|max:20',
        ];
    }
}
