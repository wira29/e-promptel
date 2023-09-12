<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class OrganizationRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'photo' => 'nullable|mimes:jpg,png,jpeg|max:5000|image',
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
            'photo.mimes' => 'Foto harus berekstensi jpg,png,jpeg',
            'photo.max' => 'Foto maksimal 5Mb',
            'photo.image' => 'Format foto tidak valid',
            'description.required' => 'Deskripsi tidak boleh kosong'
        ];
    }
}
