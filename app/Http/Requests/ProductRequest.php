<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
 
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
            "code"=>"required|max:15|unique:products,code",
            "name"=>"required|min:4|max:15",
            "description"=>"max:250",
            "short_description"=>"max:50",
            "total_amount"=>"required|numeric|min:1|max:5000",
            "regular_price"=>"required|numeric|min:0.01|max:9999",
            "sale_price"=>"required|numeric|min:0.01|max:9999"
        ];
    }

    public function messages()
    {
        return [
            'code.required'=>'El campo :attribute no debe estar vacío',
            'code.max'=>'El campo :attribute debe ser menor a 15 caracteres',
            'name.required'=> 'El campo :attribute no debe estar vacío',
            'name.min'=> 'El campo :attribute debe contener al menos 4 caracteres',
            'name.max'=> 'El campo :attribute debe ser menor a 15 caracteres',
            'description.max'=>'El campo :attribute no debe ser mayor a 250 caracteres',
            'short_description.max'=>'El campo :attribute no debe ser mayor a 50 caracteres',
            'total_amount.required'=>'El campo :attribute no debe estar vacío.',
            'total_amount.numeric'=>'El campo :attribute debe ser un número.',
            'total_amount.min'=>'El campo :attribute debe ser mayor a 0.',
            'total_amount.max'=>'El campo :attribute no debe exceder los 5000.',
            'regular_price.required'=>'El campo :attribute no debe estar vacío.',
            'regular_price.numeric'=>'El campo :attribute debe ser numérico.',
            'regular_price.min'=>'El campo :attribute debe ser mayor a 0.01.',
            'regular_price.max'=>'El campo :attribute debe ser menor a 9999.',
            'sale_price.required'=>'El campo :attribute no debe estar vacío.',
            'sale_price.numeric'=>'El campo :attribute debe ser numérico.',
            'sale_price.min'=>'El campo :attribute debe ser mayor a 0.01.',
            'sale_price.max'=>'El campo :attribute debe ser menor a 9999.',

        ];
    }

    public function attributes()
    {
        return [
            'code'=> 'Código del Producto',
            'name'=> 'Nombre del Producto',
            'description'=> 'Descripción del Producto',
            'short_description'=>'Descripción Corta',
            'total_amount'=>'Cantidad de Stock',
            'regular_price'=>'Precio Regular',
            'sale_price'=>'Precio Venta',
        ];
    }
}
