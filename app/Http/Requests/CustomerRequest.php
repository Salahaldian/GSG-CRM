<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $id = $this->route('customer', 0);
        return [
            'name' => ['required','string', 'max:255' , function($attribute , $value , $fail){
                if($value == 'admin'){
                    return $fail('This :attribute value is forbidden!');
                }
            }],
            'email' => 'required|email|max:255|unique:customer,email,'.$id,
            'phone' => 'nullable|string|max:20',
        ];
    }

}
