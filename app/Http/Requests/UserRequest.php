<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50'],
            'email' => ['required', 'email'],
            'role' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,svg,webp'],
            'phone' => ['required'],
            'facebook' => ['nullable'],
            'instagram' => ['nullable'],
            'linkedin' => ['nullable'],
            'twitter' => ['nullable'],
            'password' => ['required', 'confirmed', 'min:8']

        ];
    }
}
