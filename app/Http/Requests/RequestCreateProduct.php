<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCreateProduct extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            // nom des names
            'name' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required',
            'stock' => 'required|numeric',
            'category' => 'required|numeric|exists:product_categories,id' // nom de la table après exists
        ];
    }
}
