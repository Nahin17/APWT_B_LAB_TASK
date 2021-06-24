<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required',
    	    'password'=> 'required|min:8'
        ];
    }
    public function messages()
    {
        return 
        [
          'email.required' => 'Email Required.....',
          'password.required' => 'Password Required....',
          'password.min' => 'Password must contains minimum 8 character or values....', 
        ];
    }
}
