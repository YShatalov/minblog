<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassRequest extends FormRequest
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
                
                'login' => 'required|min:5|max:50',
                'pass' => 'required|min:8|max:50'
        ];
    }

    public function messages() {
        return [
            'login.required' => 'Поле логин является обязательным',
            'login.min' => 'Поле логин должны быть не менее 5 символов',
            'pass.required' => 'Поле пароль является обязательным'
        ];
    }
}
