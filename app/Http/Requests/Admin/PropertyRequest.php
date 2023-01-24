<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'property_name'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_rent'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_type'=>[
                'required',
                'string',
                'max:200'
            ],
            'landlord_id'=>[
                'required',
                'integer',
                'max:200'
            ],
            'property_sqmt'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_agency_commission'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_deposit'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_prefix'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_description'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_location'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_address'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_city'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_state'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_postal'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_notes'=>[
                'required',
                'string',
                'max:200'
            ],
            'property_age'=>[
                'nullable',
                'string',
              
            ],
            'property_rooms'=>[
                'nullable',
                'string',
                
            ],
            'property_bedrooms'=>[
                'nullable',
                'string',
               
            ],
            'property_bathrooms'=>[
                'nullable',
                'string',
                
            ],
            'property_airconditioner'=>[
                'nullable',
                'string',
              
            ],
            'property_carparking'=>[
                'nullable',
                'string',
               
            ],
            'property_laundryroom'=>[
                'nullable',
                'string',
               
            ],
            'property_heating'=>[
                'nullable',
                'string',
               
            ],
            'property_balcony'=>[
                'nullable',
                'string',
               
            ],
            'property_gym'=>[
                'nullable',
                'string',
               
            ],
            'property_internet'=>[
                'nullable',
                'string',
               
            ],
            'property_garden'=>[
                'nullable',
                'string',
               
            ],
            'property_alarm'=>[
                'nullable',
                'string',
               
            ],
            'property_pool'=>[
                'nullable',
                'string',
               
            ],
            'property_petsallow'=>[
                'nullable',
                'string',
               
            ],
            'property_rooftop'=>[
                'nullable',
                'string',
               
            ],
            'property_images'=>[
                'nullable',
                'mimes:jpg,png,jpeg'
               
            ],
        ];

        return $rules;
    }
}
