<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'familyname' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|size:8|regex:/\A\d{3}[-]\d{4}\z/', //注意
            'address' => 'required',
            'option' => 'required|max:120'
        ];
    }

    public function prepareForValidation()
    { //postcode半角化
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'as')]);
    }
}
