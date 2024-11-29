<?php

namespace App\Http\Requests\Api\ChatMessage;

use Illuminate\Foundation\Http\FormRequest;
use Livewire\Attributes\Rule;

class GetChatMessagesRequest extends FormRequest
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
            'page' => ['required', 'integer'],
            'per_page' => ['nullable', 'integer'],
        ];
    }
}
