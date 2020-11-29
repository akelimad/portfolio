<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'company' => ['required', 'max:32'],
            'city' => ['required', 'max:32'],
            'startdate' => ['required', 'date'],
            'endate' => ['date'],
            'description' => ['required', 'max:255'],
        ];
    }

}
