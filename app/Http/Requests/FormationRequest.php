<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormationRequest extends FormRequest
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
            'title' => ['required', 'max:128'],
            'description' => ['required', 'max:255'],
            'startdate' => ['required', 'date'],
            'endate' => ['date'],
            'school' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
        ];
    }
}
