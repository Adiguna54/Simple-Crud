<?php

namespace App\Http\Requests;

use App\Models\Pegawai;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PegawaiUpdate extends FormRequest
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

            // 'pname' => 'required|string|max:20|unique:pegawais,pegawai_nama,'.$this->pegawais->id,
            // 'pjabatan' => 'required|string|max:10',
            // 'pumur' => 'required|integer',
            // 'palamat' => 'required',

            'pname' => [
                'required',
                'string',
                'max:20',
                Rule::unique('pegawais', 'pegawai_nama')->ignore($this->pname, 'pegawai_nama') //bagian ignore, pada parameter 1. $this-pname, 'pegawai_nama', artinya jika user tidak mengganti nama sama sekali setelah input data, maka fungsi ini yang akan jalan
            ],
            'pjabatan' => 'required|string|max:25',
            'pumur' => 'required|integer',
            'palamat' => 'required',
        ];
    }
}
