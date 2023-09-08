<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class VisionMissionRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'vision' => 'required',
            'mission' => 'required'
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
            'vision.required' => 'Visi harus diisi',
            'mission.required' => 'Misi harus diisi'
        ];
    }
}
