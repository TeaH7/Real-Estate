<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'name' => ['required', 'max:50'],
            'description' => ['required'],
            'for' => ['required'],
            'status' => ['required'],
            'property_type' => ['required'],
            'location' => ['required'],
            'price' => ['required'],
            'video' => ['nullable'],
            'cover_image' => ['required'],
            'bed' => ['required'],
            'bath' => ['required'],
            'garage' => ['nullable'],
            'floor_plans_image' => ['nullable'],
            'area' => ['nullable'],
            'slider_image' => ['nullable'],
            'in_slider' => ['nullable'],
            'amenity' => ['array'],
            'image' => ['array']

        ];
    }
}
