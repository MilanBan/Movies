<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'zanr' => 'required',
            'reziser' => 'required',
            'godina' => 'required|between:1900,2020',   // kako godinu ograniciti od 1900 do trenutne?
            'stiryline' => 'required|unique:posts|max:1000',
        ];
    }
}


