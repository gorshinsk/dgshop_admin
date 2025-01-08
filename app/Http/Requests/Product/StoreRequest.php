<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'article' => 'required',
            'description' => 'required',
            'content' => 'required',
            'properties' => 'required',
            'preview_image' => 'nullable|image',
            'price' => 'required',
            'quantity' => 'required',
            'is_published' => 'nullable',
            'category_id' => 'nullable',
            'color_id' => 'nullable',
        ];
    }
}
