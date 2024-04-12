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
            'email' => 'required|email',
            'password' => 'required|min:6',
            'user_type' => 'required',
        ];
        if ($this->user_type === 'customer') {
            $rules['address'] = 'required|string|max:255';
            $rules['phone'] = 'required|string|max:255';
        } elseif ($this->user_type === 'restaurant_owner') {
            $rules['name'] = 'required|string|max:255';
        } elseif ($this->user_type === 'delivery_guy') {
            $rules['vehicle_type'] = 'required|string|in:bicycle,motorcycle,car';
            $rules['registration_number'] = 'required|string|max:255';
        }

        return $rules;
    }
}
