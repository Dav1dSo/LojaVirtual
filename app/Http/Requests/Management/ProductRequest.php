<?php

namespace App\Http\Requests\Management;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        return [
            'nome' => 'required|max:25',
            'valor' => 'required',
            'descricao' => 'required|max:2000',
            'imagem' => 'required',
            'imagem.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'categoria' => 'required|not_in:0',
            'estoque' => 'required|integer'
        ];
    }
    public function messages() {
        return [
            'nome.required' => 'Nome deve ser informado!',
            'nome.max' => 'Nome muito longo!',
            'valor.required' => 'Valor deve ser informado!',
            'descricao.required' => 'Insira uma descrição.',
            'descricao.max' => 'Descrição muito longa!',
            'imagem' => 'Arquivo inválido!',  
            'categoria' => 'Selecione a categoria do produto.',
            'estoque.required' => 'Informe a quantidade no estoque.'
        ];
    }
}
