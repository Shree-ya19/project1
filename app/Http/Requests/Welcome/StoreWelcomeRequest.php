<?php

namespace App\Http\Requests\Welcome;

use Illuminate\Foundation\Http\FormRequest;

class StoreWelcomeRequest extends FormRequest
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
            'title'=>['required','string'],
            'caption'=>['required','string'],
            'image'=>['required','image'],
            'why'=>['required','string'],
            'since'=>['required','string'],
        ];
    }
}
