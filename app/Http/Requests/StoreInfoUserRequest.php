<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInfoUserRequest extends FormRequest
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
            "name"      => "required|string",
            "surnames"  => "required|string",
            "phone"     => "required|max:10|unique:users",
            "email"     => "required|string|email|max:255|unique:users",
            "id_type"   => "required",
            "id_number" => "required",
        ];
    }

    public function attributes()
    {
        return [
            "name"      => "nombre",
            "surnames"  => "Apellidos",
            "phone"     => "numero celular",
            "email"     => "correo electronico",
            "id_type"   => "tipo de ID",
            "id_number" => "numero de ID",
        ];
    }
}
