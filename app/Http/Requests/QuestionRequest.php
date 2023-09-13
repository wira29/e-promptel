<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class QuestionRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'repeater-group' => 'required|array',
            'repeater-group.*.name' => 'required|max:150',
            'poll_id' => 'required|exists:polls,id'
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
            'repeater-group.required' => 'Form harus diisi',
            'repeater-group.array' => 'Format Form tidak valid',
            'repeater-group.*.name.required' => 'Pertanyaan harus diisi',
            'repeater-group.*.name.max' => 'Pertanyaan maksimal 150 karakter',
            'poll_id.required' => 'ID Polling harus diisi',
            'poll_id.exists' => 'ID Polling tidak valid'
        ];
    }
}
