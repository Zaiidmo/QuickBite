<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
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
    public function rules()
    {
        $rules = [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_type' => 'required',
            'legal_name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'vehicle' => 'nullable|string|in:foot,bike,car',
            'vehicle_registration' => 'nullable|string|max:255',
        ];
        return $rules;
    }
    public function messages()
    {
        return [
            'username.required' => 'Username is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'user_type.required' => 'User type is required',
            'legal_name.string' => 'Legal name must be a string',
            'legal_name.max' => 'Legal name must not exceed 255 characters',
            'address.string' => 'Address must be a string',
            'address.max' => 'Address must not exceed 255 characters',
            'phone.string' => 'Phone must be a string',
            'phone.max' => 'Phone must not exceed 255 characters',
            'vehicle_type.string' => 'Vehicle type must be a string',
            'vehicle_type.in' => 'Vehicle type must be bicycle, motorcycle or car',
            'vehicle_registration.string' => 'Registration number must be a string',
            'vehicle_registration.max' => 'Registration number must not exceed 255 characters',
        ];
    }
}
