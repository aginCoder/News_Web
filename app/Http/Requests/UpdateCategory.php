<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategory extends FormRequest
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
            'name' => 'required',
            'meta_keyword' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'Bạn chưa nhập tên',
            'meta_keyword.required' => 'Bạn chưa nhập key_word',
            'meta_title.required' => 'Bạn chưa nhập title',
            'meta_description.required' => 'Bạn chưa nhập mô tả',
        ];
    }
}
