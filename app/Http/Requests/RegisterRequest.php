<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|name',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'password_c' => 'password|password_c'
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Bạn chưa nhập email!',
            'email.email' => 'Email không đúng định dạng!',
            'password.required' => 'Bạn chưa nhập mật khẩu!',
            'password.passqord_c' => 'Bạn nhập lại mật khẩu chưa đúng!',
            'password.min' => 'Độ dài mật khẩu tối thiểu là 5!',
        ];
    }
}
