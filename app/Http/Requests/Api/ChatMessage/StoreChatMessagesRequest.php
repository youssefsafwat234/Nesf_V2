<?php

namespace App\Http\Requests\Api\ChatMessage;

use Illuminate\Foundation\Http\FormRequest;

class StoreChatMessagesRequest extends FormRequest
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
            'chat_id' => ['required', 'exists:chats,id'],
            'message' => ['required', 'string'],
        ];
    }
}
