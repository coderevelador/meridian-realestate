<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertiesUpdateRequest extends FormRequest
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
            'name' => 'required',
            'location' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:1048',
            'description' => 'required',
            'price'  => 'required',
            'area' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
        ];
    }
}
