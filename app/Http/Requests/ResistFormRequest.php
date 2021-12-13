<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use App\Rules\NewValidate;
use Illuminate\Foundation\Http\FormRequest;

class ResistFormRequest extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'required|max:255|email|unique:users',
            'password' => ['required',new NewValidate,'confirmed'],
            'password_confirmation' => 'required',
        ];
    }
}
