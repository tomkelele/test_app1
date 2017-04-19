<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangingAvatarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // all user can access
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
            'photo' => 'image|mimes:jpeg,png,gif|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'photo.image'           => 'Your photo must be an image.',
            'photo.mimes'           => 'Your photo must be type of jpg, png or gif.',
            'photo.max'             => 'Your photo size can not be greater than 10 MB.',       
        ];
    }
}
