<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditionsFormRequest extends FormRequest
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
            'numero_edicao' => ['required', 'min:3'],
        ];
    }
    public function messages()
    {
        return [
        'numero_edicao.required' => 'O campo numero_edicao é obrigatório'];
    }
}
