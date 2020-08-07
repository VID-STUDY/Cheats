<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CheatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'type' => [
                'required',
                Rule::in(['spoofer', 'cheat', 'macros'])
            ],
            'description' => 'required|string',
            'image' => 'nullable|image',
            'file' => 'nullable|file|mimes:rar,zip',
            'features' => 'nullable|array',
            'durations' => 'required|array',
            'game_id' => 'required|integer'
        ];
    }
}
