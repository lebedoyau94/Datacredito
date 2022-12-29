<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoxCheckStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'active' => 'required',
            'motive' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            "active" => "terminos y condiciones",
            "motive" => "motivo",
        ];
    }

}
