<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCodeRequest extends FormRequest
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
            "code"  => "required|string",
            "email" => "required",
            "phone" => "required",
        ];
    }

    public function attributes()
    {
        return [
            "code"  => "codigo",
            "email" => "correo electronico",
            "phone" => "celular",
        ];
    }
}
