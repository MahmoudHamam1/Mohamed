<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompany extends FormRequest
{


    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [
            'en.name'           => 'nullable|string|max:200',
            'ar.name'           => 'required|string|max:200',
            'phone_number_1'    => 'required|numeric|digits_between:8,20',
            'email'             => 'required|email|max:200|unique:companies,email',
            'user_id'           => 'required|integer',
        ];
    }

    public function messages() {
        return [
            'ar.name.required'              => 'يجب ادحال اسم الشركة بالعربية',
            'ar.name.max'                   => 'الحد الاقصي للحروف 200 حرف',
            'en.name.required'              => 'يجب ادحال اسم الشركة بالانجليزية',
            'en.name.max'                   => 'الحد الاقصي 200 حرف',

            'phone_number_1.required'       => 'يجب ادحال رقم الهاتف 1',
            'phone_number_1.numeric'        => 'رقم الهاتف 1 يتكون من ارقام فقط',
            'phone_number_1.digits_between' => 'رقم الهاتف 1 بين 8 ارقام الي 15 رقم',

            'email.required'                => 'يجب ادحال البريد الالكتروني',
            'email.email'                   => 'استخدم بريد الكتروني حقيقي',
            'email.max'                     => 'الحد الاقصي للحروف 200 حرف',
            'email.unique'                  => 'هذا البريد مسجل لدينا',


        ];
    }


}
