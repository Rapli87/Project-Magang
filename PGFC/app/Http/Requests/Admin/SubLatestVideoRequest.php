<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SubLatestVideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', // Validasi untuk gambar
            'url' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'rate' => 'required|integer|min:1|max:5',
        ];
    }
}
