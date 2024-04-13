<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DongXeCreateRequest extends FormRequest
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
            'tendongxe' => 'unique:dongxe|required|min:3|max:255',
        ];
    }

    public function messages() {
        return [
            'tendongxe.min' => 'Tên dòng xe ít nhất :min ký tự',
            'tendongxe.max' => 'Tên dòng xe nhiều nhất :max ký tự',
            'tendongxe.required' => 'Chưa nhập tên dòng xe',
            'tendongxe.unique' => 'Dòng xe đã tồn tại',
        ];
    }
}
