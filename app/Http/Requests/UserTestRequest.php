<?php

namespace App\Http\Requests;

use App\Rules\TestRule;
use Illuminate\Foundation\Http\FormRequest;

class UserTestRequest extends FormRequest
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
            'test_field' => ['required','integer', new TestRule]
        ];
    }

    public function messages()
    {
        return [
            'required' => 'UserTestRequest error message'
        ];
    }
}
