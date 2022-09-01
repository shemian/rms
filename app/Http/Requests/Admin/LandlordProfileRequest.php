<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LandlordProfileRequest extends FormRequest
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
        $rules = [
            'name'=>[
                'required',
                'string',
                'max:200'
            ],
            'email'=>[
                'required',
                'string',
                'max:200'
            ],
            'phone'=>[
                'required',
                'string',
                'max:10'
            ],
            'id_number'=>[
                'required',
                'string',
                'max:10'
            ],

            'image_identity'=>[
                'nullable',
                'mimes:jpg,png,jpeg'
            ],
            'address'=>[
                'required',
                'string',
                'max:20'
            ],

            'bank_associated'=>[
                'string',
                'max:20',
            ],
            'bank_account'=>[
                'string',
               
            ]
        ];

        return $rules;
    }
}
