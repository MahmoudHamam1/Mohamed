<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyImage extends FormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'company_logo'  => 'nullable|image|dimensions:min_width=100,min_height=100,max_width=300,max_height=300',
            'offer_logo'    => 'nullable|image|dimensions:min_width=100,min_height=100,max_width=300,max_height=300',
            'slider_1'      => 'nullable|image|dimensions:min_width=300,min_height=300,max_width=800,max_height=800',
            'slider_2'      => 'nullable|image|dimensions:min_width=300,min_height=300,max_width=800,max_height=800',
            'slider_3'      => 'nullable|image|dimensions:min_width=300,min_height=300,max_width=800,max_height=800',
            'slider_4'      => 'nullable|image|dimensions:min_width=300,min_height=300,max_width=800,max_height=800',
            'slider_5'      => 'nullable|image|dimensions:min_width=300,min_height=300,max_width=800,max_height=800',
        ];
    }

    public function messages() {
        return [
            'company_logo.dimensions'   => 'ابعاد الصوره بين 300px الى 800px للعرض و 300px الى 800px للطول لصوره الشعار.',
            'offer_logo.dimensions'     => 'ابعاد الصوره بين 300px الى 800px للعرض و 300px الى 800px للطول لصوره العرض.',
            'slider_1.dimensions'       => 'ابعاد الصوره بين 300px الى 800px للعرض و 300px الى 800px للطول لصوره السلايدر 1.',
            'slider_2.dimensions'       => 'ابعاد الصوره بين 300px الى 800px للعرض و 300px الى 800px للطول لصوره السلايدر 2.',
            'slider_3.dimensions'       => 'ابعاد الصوره بين 300px الى 800px للعرض و 300px الى 800px للطول لصوره السلايدر 3.',
            'slider_4.dimensions'       => 'ابعاد الصوره بين 300px الى 800px للعرض و 300px الى 800px للطول لصوره السلايدر 4.',
            'slider_5.dimensions'       => 'ابعاد الصوره بين 300px الى 800px للعرض و 300px الى 800px للطول لصوره السلايدر 5.',
        ];
    }

}
