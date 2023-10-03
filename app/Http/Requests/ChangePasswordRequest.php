<?php

namespace App\Http\Requests;

class ChangePasswordRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules(): array
    {
        return [
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    /**
     * Validation custom Messages.
     *
     * @return array
     */

    public function messages(): array
    {
        return [
            'password.required' => 'Password baru tidak boleh kosong',
            'password.min' => 'Password baru minimal 6 karakter',
            'password.confirmed' => 'Ulangi password tidak cocok',
            'password_confirmation.required' => 'Ulangi password tidak boleh kosong'
        ];
    }
}
