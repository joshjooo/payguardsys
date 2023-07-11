<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        
           if(request()->isMethod('post')) {
            return [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'mobile' => 'required',
            ];
        } 
        
    }


     public function messages()
    {
        if(request()->isMethod('post')) {
            return [
                'name.required' => 'Name is required!',
                'email.required' => 'email is required!',
                'email.email' => 'email must be valid!',
                'password.required' => 'Password is required!',
                'mobile.required' => 'mobile is required!'
            ];
        } 
    }
}
