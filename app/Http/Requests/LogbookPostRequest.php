<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogbookPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'judul' => 'required|max:50',
            'nim_ketua' => 'required',
            'topik' => 'required',
            'deskripsi_progress' => 'nullable',
            'file_laporan' => 'nullable|file|mimes:pdf|max:5000'
        ];
    }
}
