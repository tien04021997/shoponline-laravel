<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
            'name' => 'required',
            'icon' => 'required'
        ];
    }

    public function messages()
    {
        // return về một mảng
        return [
            'name.required' => 'Không được để trống',
            'icon.required' => 'Không được để trống'
        ];
    }
}
