<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketForm extends FormRequest
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
            'name' => ['required', 'alpha_spaces'],
            'email' => ['required', 'email:rfc'],
            'child_ticket' => ['required', 'numeric', 'min:0'],
            'parent_ticket' => ['required', 'numeric', 'min:0'],
        ];
    }
}
