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
            "income"        => "required|string",
            "be_assigned"   => "required|string",
        ];
    }

    public function attributes()
    {
        return [
            "be_assigned" => "destinar al pago",
            "income"      => "ingresos actualmente",
        ];
    }
}