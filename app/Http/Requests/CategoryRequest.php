<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class CategoryRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }

    /**
     * Custom Validation Message
     *
     * @return array<string, ValidationRule|array|string>
     */

    public function messages(): array
    {
        return [
            'name.required' => 'Nama kategori harus diisi'
        ];
    }
}
