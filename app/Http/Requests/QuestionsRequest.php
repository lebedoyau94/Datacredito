<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionsRequest extends FormRequest
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
            "income_range"       => "required|string",
            "allocate_payment"   => "required|string",
        ];
    }

    public function attributes()
    {
        return [
            "allocate_payment"  => "destinar al pago",
            "income_range"      => "ingresos actualmente",
        ];
    }
}
