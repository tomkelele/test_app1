<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name'          => 'required|min:8|max:100',
            'price'         => 'required|numeric|digits_between:1,10',
            'photo'         => 'image|mimes:jpeg,gif,png|max:10240',
            'description'   => 'required|min:20|max:300'
        ];
    }
}
