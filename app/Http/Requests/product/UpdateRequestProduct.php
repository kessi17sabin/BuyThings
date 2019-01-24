<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequestProduct extends FormRequest
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
            'product_name' => 'required' ,
            'product_price' => 'required' ,
            'category_id' => 'required' ,
            'image1' => 'image|mimes:jpeg,bmp,png|required|max:5000',
            'image2' => 'image|mimes:jpeg,bmp,png|max:5000',
            'image3' => 'image|mimes:jpeg,bmp,png|max:5000',

        ];
    }
}
