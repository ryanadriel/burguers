<?php

namespace App\Http\Requests\System;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules($id = null): array
    {

        $rules = [
            'client_id' => 'required|integer|exists:clients,id',
            'address' => 'required|string|max:255',
            'amount' => 'required|integer|min:1',
            'status_id' => 'required|integer|exists:statuses,id',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
          'client_id.required' => 'O campo é obrigatório'
        ];
    }
}
