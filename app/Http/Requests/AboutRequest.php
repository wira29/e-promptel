<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class AboutRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'content' => 'required'
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
            'content.required' => 'Tentang kami harus diisi'
        ];
    }
}
