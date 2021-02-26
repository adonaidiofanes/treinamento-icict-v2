<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfracoesFormRequest extends FormRequest
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
            'empresa' => 'required|min:3',
            'marca' => 'required|min:3',
            'tipo' => 'required',
            'estado' => 'required',
        ];
    }

    // Customização de mensagens validações
    public function messages()
    {
        return [
            'empresa.required' => 'O preenchimento do campo Empresa é obrigatório!',
            'empresa.min' => 'O campo Empresa deve ter no mínimo 3 letras!',
            'marca.required' => 'O preenchimento do campo Marca é obrigatório!',
            'marca.min' => 'O campo Marca deve ter no mínimo 3 letras!',
            'required' => 'O campo :attribute é obrigatório!'
        ];
    }

}
