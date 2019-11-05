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
            //
            'name' => 'required|unique:news,"name",'.$this->id,
            'category_id' => 'required',
            'description' => 'required',
            'content' => 'required',
            'avatar' => 'required',
        ];
    }

    public function messages()
    {
        // return về một mảng
        return [
            'name.required' => 'Không được để trống',
            'name.unique' => 'Tên danh mục đã tồn tại',
            'category_id.required' => 'Không được để trống',
            'description.required' => 'Không được để trống',
            'content.required' => 'Không được để trống',
            'avatar.required' => 'Không được để trống',
        ];
    }
}
