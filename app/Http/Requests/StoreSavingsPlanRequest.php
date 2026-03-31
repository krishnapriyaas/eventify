<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSavingsPlanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer', 'min:1'],
            'metal_type' => ['required', 'string', 'in:gold,silver,platinum'],
            'monthly_amount' => ['required', 'numeric', 'min:1'],
            'currency' => ['required', 'string', 'in:EUR,USD'],
            'execution_day' => ['required', 'integer', 'min:1', 'max:28'],
        ];
    }
}