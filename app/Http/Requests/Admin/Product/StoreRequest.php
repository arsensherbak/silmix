<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'price' => 'required|integer',
            'img'=>'nullable|file',
            'description' => 'nullable|string',
            'image' => 'nullable|array',
            'color' => 'nullable|string',
            'weight' => 'nullable|string',
            'package' => 'nullable|string',
            'category_id' => 'required|exists:categories,id'

        ];
    }
}
