<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class complainPostRequest extends FormRequest
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
            'email'=> 'required|email|max:200|email',
            'message'=> 'required|string|max:1000',
            'rate'      => 'required|numeric|digits_between:1,5',
            'type'      => 'required|string',
        ];
    }
    public function messages() {
        return [
            'message.required'              => 'يجب ادخال الرسالة ',
            'message.max'                   => 'الحد الاقصي للرسالة  1000 حرف',
            'email.required'                => 'يجب ادخال البريد الالكتروني',
            'email.email'                   => 'استخدم بريد الكتروني حقيقي',
            'email.max'                     => 'الحد الاقصي للحروف 200 حرف',
            'rate.numeric'          => 'التقيم  يتكون من ارقام فقط .',
            'rate.digits_between'   => 'التقيم  بين  رقم الي 5 ارقام .',
            'type.required'              => 'يجب ادخال نوع الرسالة ',
        ];
    }
}
