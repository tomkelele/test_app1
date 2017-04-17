<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserFormRequest extends FormRequest
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
            'name'  =>  'required|min:5|max:100',
            'email' =>  'required|email|unique:users'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Your name is required.',
            'name.min'      => 'Your name need at least 5 characters.',
            'name.max'      => 'Your name maximum is 100 characters.',
            'email.required'=> 'Your email is required.',
            'email.email'   => 'The email must be a valid email address.',
            'email.unique'  => 'Your email has already been taken.',
        ];
    }
}
