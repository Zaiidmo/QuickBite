<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:password'],
            'legal_name' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'vehicle' => ['nullable', 'string', 'max:255'],
            'vehicle_registration' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Email address is required',
            'email.email' => 'Invalid email address format. Example: example@email.com',
            'email.unique' => 'This email address is already registered',
            'name.required' => 'Please provide a username',
            'name.string' => 'Invalid username. Only characters are allowed',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters long',
            'password_confirmation.required' => 'Please confirm your password',
            'password_confirmation.same' => 'Password confirmation does not match the password',
        ];
    }
}
