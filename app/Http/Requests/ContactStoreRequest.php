<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'name' => ['required', 'max:250', 'min:5', 'string'],
            'contact_number' => ['required', 'digits_between:9,9', 'unique:contacts,contact_number'],
            'email' => ['required', 'unique:contacts,email', 'email'],
        ];
    }
}
