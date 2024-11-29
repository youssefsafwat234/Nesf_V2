<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SocialLoginRequest extends FormRequest
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
            'provider' => 'required',
            'token' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'provider.required' => 'مقدم الخدمة مطلوب.',
            'token.required' => 'الرمز مطلوب.',
        ];
    }
}
