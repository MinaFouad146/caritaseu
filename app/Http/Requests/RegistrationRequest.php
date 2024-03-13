<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            //
            'userName' => 'required|string|max:100',
            'Email' => 'required|string|email|max:255|unique:admins',
            'inputPassword' => 'required|string|min:8',
            'repPassword' => 'required_with:inputPassword|string|same:inputPassword',
            'group' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'userName.required' => 'User Name is Required !',
            'Email.required' => 'Email is Required !',
            'Email.email' => 'Email is Invalid !',
            'Email.unique' => 'Email is used before',
            'inputPassword.required' => 'Password is required',
            'inputPassword.min' => 'password is numbers only and min 8 digits',
            'inputPassword.confirmed' => 'password not matches',
            'group.required' => 'Please set the employee Group',

        ];
    }
}
