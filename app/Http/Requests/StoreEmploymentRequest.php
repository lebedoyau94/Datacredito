<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmploymentRequest extends FormRequest
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
            "scholarship"=>'required|string',
            "profession"=>'required|string',
            "year_experincie"=>'required|string',
            "tyc"=>'required|string',
            "file"=>'required|file|mimes:pdf,docx'
        ];
    }
    public function attributes()
    {
        return [
            "scholarship" => "nivel de escolaridad",
            "profession" => "profesi&oacute;n",
            "year_experincie" => "años de experinencia",
            "tyc" => "terminos y condiciones",
            "file" => "archivo"

        ];
    }
}
