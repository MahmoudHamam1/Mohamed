<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOffer extends FormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'en.title'          => 'required|string|max:200',
            'ar.title'          => 'required|string|max:200',
            'en.description'    => 'nullable|string|max:2000',
            'ar.description'    => 'nullable|string|max:2000',
            'start_date'        => 'required|date|max:100',
            'expire_date'       => 'required|date|max:100',
            // 'discount'        => 'required|integer|max:3',
            'discount'          => 'required|integer|between:1,100',
            // 'image'             => 'nullable|image|dimensions:min_width=100,min_height=200,max_width=800,max_height=800'
        ];
    }


    public function messages() {
        return [

            'ar.title.required'             => 'يجب ادحال عنوان العرض بالعربية .',
            'en.title.required'             => 'يجب ادحال عنوان العرض بالانجليزية .',

            'ar.title.max'                  => 'الحد الاقصي للحروف 200 حرف',
            'en.title.max'                  => 'الحد الاقصي للحروف 200 حرف',

            'ar.description.max'            => 'الحد الاقصي للحروف 2000 حرف',
            'en.description.max'            => 'الحد الاقصي للحروف 2000 حرف',

            'start_date.required'           => 'يجب ادحال تاريخ بداية العرض .',
            'start_date.date'               => 'يجب ادحال تاريخ بداية العرض صحيح .',

            'expire_date.required'          => 'يجب ادحال تاريخ نهاية العرض .',
            'expire_date.date'              => 'يجب ادحال تاريخ نهاية العرض صحيح .',

            'discount.required'             => 'يجب ادحال الخصم .',
            'discount.between'              => 'الحد الاقصي للخصم بين 1% الي 100% .',

        ];
    }


}
