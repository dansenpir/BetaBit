<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePeople extends FormRequest
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
            'name' => ['required', 'min: 3', 'max: 60'],
            'email' => ['required', 'max:100'],
            'phone' => ['required', 'min:11', 'max:11'],
            'birthdate' => ['required', 'min:9', 'max:10']
        ];
    }
}
