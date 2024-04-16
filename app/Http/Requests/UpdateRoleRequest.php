<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
            'slug' => 'required|string|max:255',
            'permission_id' => 'required|array',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'The name field is required',
            'name.string' => 'The name field must be a string',
            'name.max' => 'The name field must not exceed 255 characters',
            'slug.required' => 'The slug field is required',
            'slug.string' => 'The slug field must be a string',
            'slug.max' => 'The slug field must not exceed 255 characters',
            'permission_id.required' => 'The permission_id field is required',
            'permission_id.array' => 'The permission_id field must be an array',
        ];
    }
}
