<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSpotRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'establishment_id' => 'required|exists:establishments,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => ['required', 'string', Rule::in(['regular', 'preferential', 'motorcycle'])],
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'is_available' => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'establishment_id.required' => 'O ID do estabelecimento é obrigatório.',
            'establishment_id.exists' => 'O estabelecimento informado não existe.',
            'name.required' => 'O nome da vaga é obrigatório.',
            'type.required' => 'O tipo da vaga é obrigatório.',
            'type.in' => 'O tipo de vaga deve ser "regular", "preferential" ou "motorcycle".',
            'latitude.required' => 'A latitude é obrigatória.',
            'longitude.required' => 'A longitude é obrigatória.',
        ];
    }
}
