<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class AudioRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'date' => 'required|date',
            'title' => 'required',
            'content' => 'required',
            'link' => 'required|url'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function messages(): array
    {
        return [
            'date.required' => 'Tanggal harus diisi',
            'date.date' => 'Format tanggal salah',
            'title.required' => 'Judul harus diisi',
            'content.required' => 'Konten harus diisi',
            'link.required' => 'Link harus diisi',
            'link.url' => 'Link url tidak valid'
        ];
    }
}
