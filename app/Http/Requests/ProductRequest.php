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
            "code"=>"required|max:15",
            "name"=>"required|min:4|max:15",
            "description"=>"max:250",
            "short_description"=>"max:50"
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

        ];
    }

    public function attributes()
    {
        return [
            'code'=> 'Código del Producto',
            'name'=> 'Nombre del Producto',
            'description'=> 'Descripción del Producto',
            'short_description'=>'Descripción Corta'
        ];
    }
}
