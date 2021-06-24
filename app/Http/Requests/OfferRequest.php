<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'email' => 'required',
            'title' => 'required|max:255',
            //'slug' => 'required|unique:offer'.$this->id,
            'content' => 'required|max:1300',
            'region' => 'required',
            'ville' => 'required'
        ];
    }
}
