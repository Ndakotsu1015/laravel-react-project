<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password; // Correct Password import

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|max:55',
            'lga_id' => 'required|integer|max:5',
            'state_id' => 'required|integer|max:5',
            'country_id' => 'required|integer|max:5',
            'email' => 'required|email|unique:users,email', // Corrected uniqueness rule
            'password' => [
                'required',
                'confirmed',
                Password::min(8) // Use Password validation rule
                    ->letters()
                    ->symbols()
            ]
        ];
    }
}
