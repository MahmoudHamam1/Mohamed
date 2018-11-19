<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sliderPostRequest extends FormRequest
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
            'ar.description'           => 'required|string|max:400',
            'en.description'           => 'required|string|max:400',
            'ar.title'           => 'required|string|max:200',
            'en.title'           => 'required|string|max:200',
            'image'             => 'required|image',
        ];
    }

    public function messages() {
        return [
            'ar.title.required'              => 'يجب ادخال عنوان الصورة بالعربي',
            'ar.title.max'                   => 'الحد الاقصي للحروف 200 حرف',
            'ar.description.required'              => 'يجب ادخال وصف بالعربي',
            'ar.description.max'                   => 'الحد الاقصي 400 حرف',
            'en.title.required'              => ' يجب ادخال عنوان الصورة بالانجليزي',
            'en.title.max'                   => 'الحد الاقصي للحروف 200 حرف',
            'en.description.required'              => 'يجب ادخال وصف  بالانجليزي',
            'en.description.max'                   => 'الحد الاقصي 400 حرف',
            'image.image'                   => 'الملف يجب ان يكون صورة',
            'image.required'                   => ' يجب ادخال صورة',
        ];
    }
}
