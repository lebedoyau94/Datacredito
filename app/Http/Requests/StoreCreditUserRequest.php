<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreditUserRequest extends FormRequest
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
            'reason' => 'nullable|max:255',
            'income_range' => 'required|decimal',
            'electricity_receipt' => 'required|max:255',
            'water_bill' => 'nullable|max:255',
            'dreams' => 'nullable|max:255',
        ];
    }
    public function attributes()
    {
        return [
            "reason" => "razón",
            "income_range" => "rango de ingresos",
            "electricity_receipt" => "recibo de electricidad",
            "water_bill" => "factura de agua",
            "dreams" => "sueños",
        ];
    }
}
