<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'gender_id' => 'required',
            'email' => 'required|string|email|max:255',
            'postcode' => 'required|string|max:8',
            'address' => 'required|string|max:255',
            'opinion' => 'required|string|max:120'
        ];

    }

}
