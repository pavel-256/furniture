<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';

        return [
            'categorie_id' => '',
            'title' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:products,purl' . $item_id,
            'article' => 'required',
            'price' => 'required | numeric',
            'image' => 'image',

        ];
    }
}
