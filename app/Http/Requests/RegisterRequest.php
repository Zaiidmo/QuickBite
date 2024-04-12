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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'user_type' =>'required|in:customer,restaurant,driver',

            'legal_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'vehicle' => 'nullable|string|max:255',
            'vehicle_registration' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email address is required !! ',
            'email.email' => 'Unvalid Email address ; example@email.com',
            'email.unique' => 'you already have an account',
            'username.required' => 'User name required',
            'username.string' => 'unvalid name',
            'password.required' => 'password required',
            'password.min' => 'password not strong enough !',
            'user_type.required' => 'Please select a type for your account',
        ];
    }
}
