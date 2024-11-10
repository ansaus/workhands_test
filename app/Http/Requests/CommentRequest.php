<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;

    }

    public function rules(): array
    {
        return [
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ];
    }
}
