<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieStoreRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'genre' => 'required|string|in:Action,Comedy,Drama,Horror,Science Fiction',
            'release_date' => 'required|date',
            'rating' => 'required|numeric|min:0|max:10',
            'duration' => 'required|integer|min:0',
            'is_featured' => 'sometimes|boolean',
            'price' => 'nullable|numeric|min:0',
            'director' => 'nullable|string|max:255',
        ];
    }
}
