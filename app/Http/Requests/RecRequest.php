<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecRequest extends FormRequest
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
                
            'title' => 'required|min:5|max:5000',
            'preview' => 'required|min:8|max:5000',
            'description' => 'required|min:8|max:5000'
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Поле название является обязательным',
            'title.min' => 'Поле название должны быть не менее 5 символов',
            'description.required' => 'Поле текст является обязательным'
        ];
    }
}
