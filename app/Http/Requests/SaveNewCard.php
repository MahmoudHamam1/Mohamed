<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveNewCard extends FormRequest
{


    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [
            'deliver_date'  => 'required|date|max:100',
            'expire_date'   => 'required|date|max:100',
            'card_id'       => 'required|integer',
        ];
    }


    public function messages() {

        return [

            'deliver_date.required'  => 'يجب ادحال تاريخ موعد التسليم .',
            'deliver_date.date'      => 'يجب ادخال تاريخ حقيقي',

            'expire_date.required'   => 'يجب ادخال تاريخ انتهاء صلاحية البطاقه .',
            'expire_date.date'       => 'يجب ادخال تاريخ حقيقي',

            'card_id.required'       => 'لا يوجد رقم للبطاقة يرجي اعادة المحاوله',
            'card_id.integer'        => 'رقم البطاقه غير صحيح .',
        ];
    }


}
