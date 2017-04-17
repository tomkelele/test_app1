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
            'name'          => 'required|min:8|max:100|regex:/^[A-Za-z\s]+$/',
            'price'         => 'required|numeric|digits_between:1,10',
            'photo'         => 'image|mimes:jpeg,gif,png|max:10240',
            'description'   => 'required|min:20|max:300'
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Your product name is required.',
            'name.min'              => 'Your product name need at least 8 characters.',
            'name.max'              => 'Your product name maximum is 100 characters.',
            'name.regex'            => 'Your product name can content only Alphabet characters and space.',
            'price.required'        => 'Your product price is required.',
            'price.numeric'         => 'Your product price must be a number.',
            'price.digits_between'  => 'Your product price must be between 1 and 10 digits.',
            'photo.image'           => 'Your product photo must be an image.',
            'photo.mimes'           => 'Your product photo must be type of jpg, png or gif.',
            'photo.max'             => 'Your product photo size can not be greater than 10 MB.',
            'description.required'  => 'Your product description is required.',
            'description.min'       => 'Your product description need at least 20 characters.',
            'description.max'       => 'Your product description maximum is 300 characters.',         
        ];
    }
}
