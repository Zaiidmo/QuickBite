<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'cover' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'The name field is required.',
            'description.required' => 'The description field is required.',
            'address.required' => 'The address field is required.',
            'phone.required' => 'The phone field is required.',
            'email.email' => 'The email field must be a valid email address.',
        ];
    }
}
