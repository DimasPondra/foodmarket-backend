<?php

namespace App\Http\Requests;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    use PasswordValidationRules;

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
        $data = request()->all();

        $rules = [
            'name' => 'required|string|max:255',
            'password' => $this->passwordRules(),
            'address' => 'required|string',
            'roles' => 'required|string|in:USER,ADMIN',
            'houseNumber' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ];

        if (request()->has('id')) {
            $rules['email'] = ['required','string','email','max:255', Rule::unique('users')->ignore($data['id'])];
        } else {
            $rules['email'] = 'required|string|email|max:255|unique:users';
        }

        return $rules;
    }
}
