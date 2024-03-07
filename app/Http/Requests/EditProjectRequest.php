<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProjectRequest extends FormRequest
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
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:1024',
            'client' => 'required|string|max:46',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Errore! Il campo è obbligatorio',
            'title.max' => 'Errore! Hai inserito troppi caratteri.',
            'description.required' => 'Errore! Il campo è obbligatorio',
            'description.max' => 'Errore! Hai inserito troppi caratteri.',
            'client.required' => 'Errore! Il campo è obbligatorio',
            'client.max' => 'Errore! Hai inserito troppi caratteri.',
        ];
    }
}

