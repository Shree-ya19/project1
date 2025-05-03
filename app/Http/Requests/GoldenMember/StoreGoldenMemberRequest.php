<?php

namespace App\Http\Requests\GoldenMember;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoldenMemberRequest extends FormRequest
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
            'name'=>['required','string'],
            'image'=>['required','image'],
            'role'=>['required','string'],
            'description'=>['required','string'],
        ];
    }
}
