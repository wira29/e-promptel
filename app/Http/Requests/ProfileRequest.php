<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rule;

class ProfileRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'civil_identity_number' => ['required', 'regex:/^[0-9]*$/', Rule::unique('users')->ignore(auth()->id())],
            'email' => ['required', Rule::unique('users')->ignore(auth()->id())],
            'username' => ['required', Rule::unique('users')->ignore(auth()->id())]
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
            'name.required' => 'Nama harus diisi',
            'civil_identity_number.required' => 'NIP harus diisi',
            'civil_identity_number.regex' => 'NIP harus berupa angka',
            'civil_identity_number.unique' => 'NIP telah terdaftar',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email telah terdaftar',
            'username.required' => 'Username harus diisi',
            'username.unique' => 'Username telah terdaftar'
        ];
    }
}
