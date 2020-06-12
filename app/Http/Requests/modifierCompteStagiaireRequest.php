<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class modifierCompteStagiaireRequest extends FormRequest
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
            'last_name' => '',
            'first_name' => '',
            'birthday' => 'date',
            'gender' => 'alpha|min:1',
            'email' => 'email',
            'phone' => '',
            'username' => '',
            'password' => 'required',
            'new_password' => ''
        ];
    }
}
