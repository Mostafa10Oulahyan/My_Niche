<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductWithRules extends FormRequest
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
            'n'=>'required|min:5',
            'p'=>'required',
            'c'=>'required|min:5',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',

        ];
    }
    public function messages()
    {
        return [
            'n.required'=>'name is required',
            'n.min'=>'too short enter more',
            'p.required'=>'price is required',
            'c.min'=>'too short enter more',
            'c.required'=>'category is required',
            'image.required'=>'image is required',
            'image.image'=>'file must be an image',
            'image.mimes'=>'image must be jpg , jpeg or png',
            'image.max'=>'image size must be less than 2MB',

        ];
    }
}
