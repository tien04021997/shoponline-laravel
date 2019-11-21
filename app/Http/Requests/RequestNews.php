<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestNews extends FormRequest
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

            'name' => 'required|unique:news,"name",'.$this->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'name.unique' => 'Tên bài viết đã tồn tại',
        ];
    }
}
