<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required|min:3',
            'description' => 'required|max:255',
            'price'=> 'required|numeric',
            'quantity'=> 'required|numeric',
            'size'=> 'required|max:100'
        ];
    }

    public function messages() {
      return [
          'required' => 'O :attribute e obrigatorio'
      ];
    }
}
