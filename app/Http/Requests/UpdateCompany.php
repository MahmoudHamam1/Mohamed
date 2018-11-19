<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompany extends FormRequest
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
    public function rules(Request $request)
    {

        $companyId = $request->company->id;

        $companyId = (isset($companyId) && $companyId != '') ? ',' . $companyId : '';

        return [
            'en.name'           => 'nullable|string|max:200',
            'ar.name'           => 'required|string|max:200',
            'en.description'    => 'nullable|string|max:2000',
            'ar.description'    => 'nullable|string|max:2000',
            'en.address'        => 'nullable|string|max:200',
            'ar.address'        => 'nullable|string|max:200',
            'phone_number_1'    => 'required|numeric|digits_between:8,20',
            'phone_number_2'    => 'nullable|numeric|digits_between:8,20',
            'email'             => 'required|email|max:200|unique:companies,email'. $companyId,
            'website'           => 'nullable|string|max:200',
            'snapchat'          => 'nullable|string|max:200',
            'twitter'           => 'nullable|string|max:200',
            'facebook'          => 'nullable|string|max:200',
            'instgram'          => 'nullable|string|max:200',
            'longitude'         => 'nullable|string|max:200',
            'latitude'          => 'nullable|string|max:200',
            'verified'          => 'nullable|boolean',
            // 'image'             => 'nullable|image|dimensions:min_width=100,min_height=200,max_width=800,max_height=800'
        ];

    }


    public function messages() {
        return [
            'ar.name.required'              => 'يجب ادحال اسم الشركة بالعربية',
            'ar.name.max'                   => 'الحد الاقصي للحروف 200 حرف',
            'en.name.required'              => 'يجب ادحال اسم الشركة بالانجليزية',
            'en.name.max'                   => 'الحد الاقصي 200 حرف',
            'en.description.max'            => 'الحد الاقصي لحقل الوصف 2000 حرف',
            'ar.description.max'            => 'الحد الاقصي لحقل الوصف 2000 حرف',
            'en.address.max'                => 'الحد الاقصي لحقل الوصف 200 حرف',
            'ar.address.max'                => 'الحد الاقصي 200 حرف',
            'phone_number_1.required'       => 'يجب ادحال رقم الهاتف 1',
            'phone_number_1.numeric'        => 'رقم الهاتف 1 يتكون من ارقام فقط',
            'phone_number_1.digits_between' => 'رقم الهاتف 1 بين 8 ارقام الي 15 رقم',
            'phone_number_2.numeric'        => 'رقم الهاتف 2 يتكون من ارقام فقط',
            'phone_number_2.digits_between' => 'رقم الهاتف 2 بين 8 ارقام الي 11 رقم',
            'website.max'                   => 'الحد الاقصي 200 حرف',
            'snapchat.max'                  => 'الحد الاقصي 200 حرف',
            'twitter.max'                   => 'الحد الاقصي 200 حرف',
            'facebook.max'                  => 'الحد الاقصي 200 حرف',
            'instgram.max'                  => 'الحد الاقصي 200 حرف',
            'longitude.max'                 => 'الحد الاقصي 200 حرف',
            'latitude.max'                  => 'الحد الاقصي 200 حرف',
            'email.required'                => 'يجب ادحال البريد الالكتروني',
            'email.email'                   => 'استخدم بريد الكتروني حقيقي',
            'email.max'                     => 'الحد الاقصي للحروف 200 حرف',
            'email.unique'                  => 'هذا البريد مسجل لدينا',
            // 'image.image'                   => 'الملف يجب ان يكون صورة',
            // 'image.dimensions'              => 'ايعاد الصوره غبر ملائمة',

        ];

    }


}
