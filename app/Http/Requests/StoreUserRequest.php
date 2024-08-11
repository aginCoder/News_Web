<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
    // Định nghĩa các quy tắc xác thực cho dữ liệu đầu vào.
    // Trả về: Một mảng liên kết trong đó khóa là tên các trường dữ liệu và giá trị là các quy tắc xác thực ứng với từng trường.
    {
        return [
            'name' => 'required|',  // kiểm tra name mình gửi lên có trống hay không
            'email' => 'required|email|unique:users',                
             // Kiểm tra email có bị trống không
             // email : có hợp lệ không
             // unique: có trùng không
            'password' => 'required|min:6',                     
            // Kiểm tra pass có trống không 
            // min: thấp nhất 6 ký tự
            'password_c' => 'required|same:password',
            // Kiểm tra pass có trống không 
            // smae: có trùng với pass trên không
            'status' => 'required',
            'role' => 'required'  
        ];
    }

    public function messages(): array
    // Định nghĩa các thông báo lỗi tùy chỉnh cho các quy tắc xác thực.
    // trả về: Một mảng liên kết trong đó khóa là các quy tắc xác thực (cùng với tên trường) và giá trị là thông báo lỗi tương ứng.
    {
        return[
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Bạn chưa nhập email!',
            'email.email' => 'Email không đúng định dạng!',
            'email.unique' => 'Email đã được sử dụng!',
            'password.required' => 'Bạn chưa nhập mật khẩu!',
            'password.min' => 'Độ dài mật khẩu tối thiểu là 6!',
            'password_c.required' => 'Bạn chưa nhập mật khẩu nhập lại',
            'password_c.same' => 'Mật khẩu không giống nhau',
            'status.required' => 'Bạn chưa chọn trạng thái',
            'role.required' => 'Bạn chưa chọn quyền hạn',
        ];
    }
}
