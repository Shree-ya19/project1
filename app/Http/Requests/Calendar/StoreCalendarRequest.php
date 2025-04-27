<?php

namespace App\Http\Requests\Calendar;

use Illuminate\Foundation\Http\FormRequest;

class StoreCalendarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'img1' => ['required','image'], 
            'img2' => ['required','image'], 
            'img3' => ['required','image'], 
            'img4' => ['required','image'], 
            'img5' => ['required','image'], 
            'img6' => ['required','image'], 
            'pdf' => ['nullable','mimes:pdf','file','max:10240'], 
        ];
    }
}
