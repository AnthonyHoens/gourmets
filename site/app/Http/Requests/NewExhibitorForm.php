<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewExhibitorForm extends FormRequest
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
            'name' => ['required', 'alpha_spaces', 'max:255'],
            'email' => ['required', 'email:rfc', 'max:255'],
            'work_title' => ['required', 'alpha_spaces', 'max:255'],
            'stand_name' => ['required', 'alpha_spaces', 'max:255'],
            'phone_number' => ['required', 'numeric'],
            'file' => ['image'],
            'tags' => [],
            'message' => [],
        ];
    }
}
