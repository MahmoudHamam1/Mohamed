<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class websiteImagePostRequest extends FormRequest
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
            'About'             => 'nullable|image|dimensions:min_width=370,min_height=410,max_width=380,max_height=420',
            'entertainment'             => 'nullable|image|dimensions:min_width=200,min_height=100,max_width=200,max_height=100',
            'education'             => 'nullable|image|dimensions:min_width=200,min_height=100,max_width=200,max_height=100',
            'services'             => 'nullable|image|dimensions:min_width=200,min_height=100,max_width=200,max_height=100',
            'hotel_tourism'             => 'nullable|image|dimensions:min_width=200,min_height=100,max_width=200,max_height=100',
            'footer1'             => 'nullable|image|dimensions:width=300,height=100',
            'footer2'             => 'nullable|image|dimensions:width=300,height=100',
            'footer3'             => 'nullable|image|dimensions:width=300,height=100',
        ];
    }

    public function messages() {
        return [
            'About.image'                  => 'يسمح بصور فقط.',
            'About.dimensions'             => ' يجب ان تكون ابعاد الصورة 410 ارتفاع و 370 عرض',
            'entertainment.image'                  => 'يسمح بصور فقط.',
            'entertainment.dimensions'             => ' يجب ان تكون ابعاد الصورة 100 ارتفاع و 200 عرض',
            'education.image'                  => 'يسمح بصور فقط.',
            'education.dimensions'             => ' يجب ان تكون ابعاد الصورة 100 ارتفاع و 200 عرض',
            'services.image'                  => 'يسمح بصور فقط.',
            'services.dimensions'             => ' يجب ان تكون ابعاد الصورة 100 ارتفاع و 200 عرض',
            'hotel_tourism.image'                  => 'يسمح بصور فقط.',
            'hotel_tourism.dimensions'             => ' يجب ان تكون ابعاد الصورة 100 ارتفاع و 200 عرض',
            'footer1.image'                  => 'يسمح بصور فقط.',
            'footer1.dimensions'             => ' يجب ان تكون ابعاد الصورة 100 ارتفاع و 300 عرض',
            'footer2.image'                  => 'يسمح بصور فقط.',
            'footer2.dimensions'             => ' يجب ان تكون ابعاد الصورة 100 ارتفاع و 300 عرض',
            'footer3.image'                  => 'يسمح بصور فقط.',
            'footer3.dimensions'             => ' يجب ان تكون ابعاد الصورة 100 ارتفاع و 300 عرض',
        ];
    }
}
