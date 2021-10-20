<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:posts|min:10|max:255',
            'content' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => ':attribute bắt buộc phải có',
            'content.required' => ':attribute phải nhập nội dung',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung',
        ];
    }
}
