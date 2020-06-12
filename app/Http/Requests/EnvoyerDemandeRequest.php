<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnvoyerDemandeRequest extends FormRequest
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
            'entreprise' => 'required',
            'type' => 'required',
            'piece1' => 'required',
            'piece2' => '',
            'piece3' => '',
            'piece4' => '',
            'piece5' => ''
        ];
    }
}
