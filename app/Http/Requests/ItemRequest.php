<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'titulo' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'o campo :attribute é obrigatório!',
            'min' => 'o campo :attribute deve ter no minimo de :min caracteres!',
        ];
    }
}
