<?php

namespace App\Http\Requests\Management;

use Illuminate\Foundation\Http\FormRequest;

class AvaliableProduct extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'star' => 'required',
            'avaliacao' => 'string|max:1000'
        ];
    }

    public function messages() {
        return [
            'start' => "Selecione as estrelas como avaliação.",
            'avaliacao' => "Número de caracteres excedido."
        ];
    }
}
