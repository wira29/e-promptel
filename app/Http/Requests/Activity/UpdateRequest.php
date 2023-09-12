<?php

namespace App\Http\Requests\Activity;

use App\Http\Requests\BaseRequest;
use App\Rules\ArticleStatusRule;
use Illuminate\Contracts\Validation\ValidationRule;

class UpdateRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:150',
            'date' => 'required|date',
            'content' => 'required',
            'thumbnail' => 'nullable|image|max:5000|mimes:jpg,png,jpeg',
            'status' => ['required', new ArticleStatusRule()],
            'category_id' => 'required|exists:categories,id'
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
            'title.required' => 'Judul harus diisi',
            'title.max' => 'Judul maksimal 150 karakter',
            'date.required' => 'Tanggal harus diisi',
            'date.date' => 'Format tanggal tidak valid',
            'content.required' => 'Konten harus diisi',
            'thumbnail.image' => 'Thumbnail harus berupa gambar',
            'thumbnail.max' => 'Thumbnail maksimal 5Mb',
            'thumbnail.mimes' => 'Ekstensi Thumbnail harus jpg,png,jpeg',
            'category_id.required' => 'Kategori harus diisi'
        ];
    }
}
