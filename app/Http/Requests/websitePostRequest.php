<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class websitePostRequest extends FormRequest
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
            'ar.about'           => 'required|string|max:400',
            'en.about'           => 'required|string|max:400',
            'ar.location'           => 'required|string|max:200',
            'en.location'           => 'required|string|max:200',
            'longitude'         => 'nullable|string|max:200',
            'latitude'          => 'nullable|string|max:200',
            'phone_number'    => 'required|numeric|digits_between:8,20',
            'email'             => 'required|email|max:200|email',
            'facebook'             => 'nullable|string|max:200|min:10',
            'google'             => 'nullable|string|max:200|min:10',
            'twitter'             => 'nullable|string|max:200|min:10',
            'insta'             => 'nullable|string|max:200|min:10',
            'snapchat'             => 'nullable|string|max:200|min:10',
            'youtube'             => 'nullable|string|max:200|min:10',
            'android'             => 'nullable|string|max:200|min:10',
            'ios'             => 'nullable|string|max:200|min:10',
            'loadingimage'             => 'required|image',
            'logo'             => 'required|image',
        ];
    }

    public function messages() {
        return [
            'ar.about.required'              => 'يجب ادخال وصف الشركة بالعربي ',
            'ar.about.max'                   => 'الحد الاقصي لوصف الشركة  400 حرف',
            'en.about.required'              => 'يجب ادخال وصف الشركة بالانجليزي ',
            'en.about.max'                   => 'الحد الاقصي لوصف الشركة  400 حرف',
            'en.location.required'              => 'يجب ادخال عنوان الشركة بالانجليزي ',
            'ar.location.max'                   => 'الحد الاقصي لعنوان الشركة  200 حرف',
            'ar.location.required'              => 'يجب ادخال عنوان الشركة بالعربي ',
            'en.location.max'                   => 'الحد الاقصي لعنوان الشركة  200 حرف',
            'longitude.max'                 => 'الحد الاقصي 200 حرف',
            'latitude.max'                  => 'الحد الاقصي 200 حرف',
            'facebook.min'              => 'الحد الادني لعنوان فيسبوك  200 حرف',
            'facebook.max'                   => 'الحد الاقصي لعنوان فيسبوك 200 حرف',
            'google.min'              => 'الحد الادني لعنوان جوجل بلص  200 حرف',
            'google.max'                   => 'الحد الاقصي لعنوان جوجل بلص 200 حرف',
            'twitter.min'              => 'الحد الادني لعنوان تويتر  200 حرف',
            'twitter.max'                   => 'الحد الاقصي لعنوان تويتر 200 حرف',
            'youtube.min'              => 'الحد الادني لعنوان يوتيوب  200 حرف',
            'youtube.max'                   => 'الحد الاقصي لعنوان يوتيوب 200 حرف',
            'ios.min'              => 'الحد الادني لعنوان تطبق ايفون  200 حرف',
            'ios.max'                   => 'الحد الاقصي لعنوان تطبق ايفون 200 حرف',
            'android.min'              => 'الحد الادني لعنوان اندرويد  200 حرف',
            'android.max'                   => 'الحد الاقصي لعنوان اندرويد 200 حرف',
            'snapchat.min'              => 'الحد الادني لعنوان سناب شات  200 حرف',
            'snapchat.max'                   => 'الحد الاقصي لعنوان سناب شات 200 حرف',
            'insta.min'              => 'الحد الادني لعنوان الانستغرام  200 حرف',
            'insta.max'                   => 'الحد الاقصي لعنوان الانستغرام 200 حرف',
            'phone_number.required'       => 'يجب ادحال رقم الهاتف 1',
            'phone_number.numeric'        => 'رقم الهاتف 1 يتكون من ارقام فقط',
            'email.required'                => 'يجب ادحال البريد الالكتروني',
            'email.email'                   => 'استخدم بريد الكتروني حقيقي',
            'email.max'                     => 'الحد الاقصي للحروف 200 حرف',
            'logo.image'                   => 'الملف يجب ان يكون صورة',
            'logo.required'                   => ' يجب ان يكون هناك صورة للشركة',
            'loadingimage.image'                   => 'الملف يجب ان يكون صورة',
            'loadingimage.required'                   => ' يجب ان يكون صورة هناك صورة للتحميل',
        ];
    }
}
