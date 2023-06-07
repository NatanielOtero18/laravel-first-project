<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->isMethod('PATCH')) { //Aca se pueden hacer validaciones para
            //variar la respuesta en base a quien pregunta
            return [
                'title' => ['required'],
                'body' => ['required']
            ];
        }

        return [
            'title' => ['required', 'min:4'],
            'body' => ['required']
        ];
    }
}
