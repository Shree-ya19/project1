<?php

namespace App\Http\Requests\BeyondAcademic;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBeyondAcademicRequest extends FormRequest
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
                'activity'=> ['required','string','max:255'],
                'detail'=> ['required','string'],
                'image' => ['required','array'],
                'image.*' => ['image', 'mimes:jpeg,png,jpg,gif'],
            ];
            
        
    }
}
