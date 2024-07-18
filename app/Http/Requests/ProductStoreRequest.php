<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'max:300'],
            'price' => ['required', 'integer']
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        // Customize the response for validation errors
        throw new HttpResponseException(response()->json([
            'message' => 'All fields are mandatory',
            'errors' => $validator->errors(),
        ], 422));
    }
}
