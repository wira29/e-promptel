<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class PollRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'start' => 'required|date',
            'end' => 'required|date',
            'description' => 'required'
        ];
    }

    /**
     * Custom Validation Messages
     *
     * @return array<string, ValidationRule|array|string>
     */

    public function messages(): array
    {
        return [
            'title.required' => 'Judul poling harus diisi',
            'title.max' => 'Judul poling maksimal 100 karakter',
            'start.required' => 'Tanggal mulai harus diisi',
            'start.date' => 'Tanggal mulai tidak valid',
            'end.required' => 'Tanggal berakhir harus diisi',
            'end.date' => 'Tanggal berakhir tidak valid',
            'description.required' => 'Deskripsi harus diisi'
        ];
    }
}
