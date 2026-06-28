<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
                   'company_id' => 'required|exists:companies,id',
            'title' => 'required|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable',
            'startup' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
        ];
    }
}
