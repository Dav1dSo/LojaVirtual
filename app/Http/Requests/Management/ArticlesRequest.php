<?php

namespace App\Http\Requests\Management;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => 'required|max:20|min:3',
            'imagem' => 'required|file|image|mimes:jpg,png,jpeg',
            'textContent' => 'required|min:6'
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'O título precisa ser informado.',
            'titulo.max' => 'O título não pode ser maior que 20 caracteres.',
            'titulo.min' => "O titulo deve ter pelo menos 3 caracteres.",
            'imagem.required' => "Selecione uma imagem.",
            'imagem.file' => 'O arquivo deve ser do tipo imagem.',
            'imagem.image' => 'O arquivo deve ser do tipo imagem.',
            'imagem.mimes' => 'A imagem precisa estar no formato: jpg, png ou jpeg.',
            'textContent.required' => 'Preencha o texto do seu artigo.',
            'textContent.min' => 'Seu texto deve conter no mínimo 6 caracteres.'
        ];
    }
}
