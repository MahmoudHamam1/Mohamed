<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCard extends FormRequest
{


    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [
            'name'              => 'required|string|max:200',
            'phone_number'      => 'required|numeric|digits_between:8,20',
            'nationality'       => 'required|string|max:200',
            'id_number'         => 'required|integer|unique:cards,id_number',
            'country'           => 'required|string|max:200',
            'district'          => 'required|string|max:200',
            'birthdate'         => 'required|string|max:200',
            'email'             => 'required|email|max:200|unique:cards,email',
        ];
    }


    public function messages() {
        return [

            'name.required'                 => 'يجب ادخال الاسم .',
            'name.max'                      => 'الحد الاقصي 200 حرف .',

            'phone_number.numeric'          => 'رقم الهاتف1 يتكون من ارقام فقط .',
            'phone_number.digits_between'   => 'رقم الهاتف  بين 8 ارقام الي 20 رقم .',

            'nationality.required'          => 'يجب ادخال الجنسية .',
            'nationality.max'               => 'الحد الاقصي 200 حرف .',

            'id_number.required'            => 'يجب ادخال رقم الهوية .',
            'id_number.integer'             => 'رقم الهوية يتكون من ارقام فقط .',
            'id_number.unique'              => 'رقم الهوية مسجل لدينا ، يجب ادخال رقم جديد .',

            'country.required'              => 'يجب ادخال اسم المدينة .',
            'country.max'                   => 'الحد الاقصي 200 حرف .',

            'district.required'             => 'يجب ادخال اسم المدينة .',
            'district.max'                  => 'الحد الاقصي 200 حرف .',

            'birthdate.required'            => 'يجب ادخال تاريخ الميلاد صحيح .',
            'birthdate.max'                 => 'الحد الاقصي 200 حرف .',

            'email.required'                => 'يجب ادحال البريد الالكتروني .',
            'email.email'                   => 'استخدم بريد الكتروني حقيقي .',
            'email.unique'                  => 'هذا البريد مسجل لدينا .',
            'email.max'                     => 'الحد الاقصي للحروف 200 حرف .',
        ];
    }

}
