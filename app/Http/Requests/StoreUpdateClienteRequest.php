<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'nome' => 'required|min:3|max:255',
            'cpf' => 'required|max:20|unique:clientes', 
            'data_nascimento' => 'required', 
            'cidade' => 'required', 
            'estado' => 'required',
            'sexo' => 'required',
        ];

        if ($this->method() === 'PATCH') {
            $rules = [
                'cpf' => [
                    'required',
                    'cpf',
                    'max:20',
                    'unique:clientes,cpf,{$this->id}',
                ]
            ];
           
        }

        return $rules;
    }
}
