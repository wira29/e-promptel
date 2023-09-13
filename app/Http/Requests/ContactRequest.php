<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class ContactRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
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
            'description.required' => 'Deskripsi kontak kami harus diisi'
        ];
    }
}
