<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'picturePath' => 'required|image|max:2048',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'price' => 'required|integer',
            'rate' => 'required|numeric',
            'types' => 'string|max:255',
        ];
    }
}
