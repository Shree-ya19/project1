<?php

namespace App\Http\Requests\about;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
           "video" => ['nullable', 'file', 'mimetypes:video/mp4,video/x-msvideo,video/quicktime', 'max:204800'],

    "message" => ['required', 'string','max:2000'],
    "image" => ['required', 'image'],
    "history" => ['required', 'string','max:2000'],
    "philosophy" => ['required', 'string','max:2000'],
        ];
    }
}
