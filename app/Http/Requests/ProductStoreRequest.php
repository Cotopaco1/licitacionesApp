<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'                      => 'required|string|max:255',
            'supplier_id'               => 'required|integer|exists:suppliers,id',
            'unit_of_measure'           => 'required|string|max:255',
            'description'               => 'nullable|string',
            'unit_price_withouth_tax'   => 'required|decimal:2',
            'brand'                     => 'nullable|string|max:255',
            'notes'                     => 'nullable|string',
            'url_data'                  => 'nullable|string|max:255',
        ];
    }
}
