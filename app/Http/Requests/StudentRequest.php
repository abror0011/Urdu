<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'course' => 'required|integer',
            'group' => 'required|string',
            'address' => 'required|string',
            // 'email' => 'required|unique:users|email|string',
            // 'password' => 'required|min:8|confirmed|srting',

        ];
    }
}
