<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()->role == 0) {
            return true;
        } else {
            return false;
        }
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
