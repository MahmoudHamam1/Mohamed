<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sliderUpdateRequest extends FormRequest
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
            'description'           => 'required|string|max:400',
            'title'           => 'required|string|max:200',
            'image'             => 'nullable|image',
        ];
    }

    public function messages() {
        return [
            'title.required'              => 'يجب ادحالة عنوان الصورة',
            'title.max'                   => 'الحد الاقصي للحروف 200 حرف',
            'description.required'              => 'يجب ادحال وصف',
            'description.max'                   => 'الحد الاقصي 400 حرف',
            'image.image'                   => 'الملف يجب ان يكون صورة',
        ];
    }
}
