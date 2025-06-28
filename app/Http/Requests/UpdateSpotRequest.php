<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSpotRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'establishment_id' => 'sometimes|exists:establishments,id',
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'type' => ['sometimes', 'string', Rule::in(['regular', 'preferential', 'motorcycle'])],
            'latitude' => 'sometimes|numeric|between:-90,90',
            'longitude' => 'sometimes|numeric|between:-180,180',
            'is_available' => 'sometimes|boolean',
        ];
    }
}
