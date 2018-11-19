<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class messagesPostRequest extends FormRequest
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
            'message'=> 'required|string|max:400',
        ];
    }

    public function messages() {
        return [
            'message.required'              => 'يجب ادحالة الرسالة ',
            'message.max'                   => 'الحد الاقصي للرسالة  400 حرف',
            'email.required'                => 'يجب ادحال البريد الالكتروني',
            'email.email'                   => 'استخدم بريد الكتروني حقيقي',
            'email.max'                     => 'الحد الاقصي للحروف 200 حرف',
  ];
    }
}
