<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'first_name'        => 'required|string|max:200',
            'last_name'         => 'required|string|max:200',
            'birthdate'         => 'nullable|string|max:200',
            'phone_number'      => 'nullable|numeric|digits_between:8,20',
            'id_number'         => 'nullable|integer',
            // 'id_number'         => 'nullable|integer|max:20',
            'roles'             => 'nullable|string|max:100',
            'nationality'       => 'nullable|string|max:200',
            'country'           => 'nullable|string|max:200',
            'district'          => 'nullable|string|max:200',
            'gender'            => 'string|max:200',
            'avatar'            => 'nullable|image|dimensions:min_width=140,min_height=140,max_width=140,max_height=140'
        ];
    }


    public function messages() {
        return [
            'first_name.required'           => 'يجب ادخال الاسم الاول.',
            'first_name.max'                => 'الحد الاقصي 200 حرف',
            'last_name.required'            => 'يجب ادخال الاسم الاخير.',
            'last_name.max'                 => 'الحد الاقصي 200 حرف',
            'birthdate'                     => 'يجب اختيار تاريخ الميلاد صحيح',
            'phone_number.numeric'          => 'رقم الهاتف 1 يتكون من ارقام فقط',
            'phone_number.digits_between'   => 'رقم الهاتف 1 بين 8 ارقام الي 20 رقم',
            'id_number.integer'             => 'رقم الهوية يتكون من ارقام فقط',
            // 'id_number.max'                 => 'رقم الهوية يتكون من 20 رقم كحد اقصى',
            'roles.max'                     => 'الحد الاقصي لحقل الصلاحيات 100 حرف',
            'country.max'                   => 'الحد الاقصي لحقل الوصف 200 حرف',
            'address.max'                   => 'الحد الاقصي لحقل الوصف 200 حرف',
            'district.max'                  => 'الحد الاقصي 200 حرف',
            'avatar.image'                  => 'يسمح بصور فقط.',
            'avatar.dimensions'             => 'ابعاد الصورة غير ملائمة.',
        ];
    }


}
