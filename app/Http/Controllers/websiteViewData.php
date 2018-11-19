<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyImage;
use App\Http\Requests\messagesPostRequest;
use App\message;
use App\SiteConfig;
use App\slider;
use App\Offer;
use App\CompanyTranslation;
use App\websiteimage;

class websiteViewData extends Controller
{
    //
    public function viewData()
    {
        $data['website'] = SiteConfig::find(1);
        if ($data['website'] == null) {
            $data['website'] = new SiteConfig;
        }
        $data['images'] = websiteimage::find(1);
        if ($data['images'] == null) {
         $data['images'] = new websiteimage;
        }

        $data['slider'] = slider::all();
        return view('website.index', compact('data'));
    }

    public function join()
    {
        $data['website'] = SiteConfig::find(1);
        if ($data['website'] == null) {
            $data['website'] = new SiteConfig;
        }
        $data['images'] = websiteimage::find(1);
        if ($data['images'] == null) {
         $data['images'] = new websiteimage;
        }

        $data['slider'] = slider::all();
        return view('website.join', compact('data'));
    }
    public function sendMessage(messagesPostRequest $request)
    {
        $contact = message::create($request->all());
        return 'تم الارسال بنجاح';
    }
    public function who_us()
    {
        $data['website'] = SiteConfig::find(1);
        if ($data['website'] == null) {
            $data['website'] = new SiteConfig;
        }
        $data['images'] = websiteimage::find(1);
        if ($data['images'] == null) {
         $data['images'] = new websiteimage;
        }

        $data['slider'] = slider::all();
        return view('website.who-us', compact('data'));
    }

    public function getCompany($id)
    {
        $data['website'] = SiteConfig::find(1);
        if ($data['website'] == null) {
            $data['website'] = new SiteConfig;
        }
        $data['images'] = websiteimage::find(1);
        if ($data['images'] == null) {
         $data['images'] = new websiteimage;
        }
        $data['slider'] = slider::all();
        $data['company'] = company::find($id);
        if ($data['company'] != null) {
            $data['companyImages'] = CompanyImage::where('company_id', $id)->first();
            $data['offers'] = Offer::where('company_id', $id)->get();
            return view('website.company', compact('data'));
        }
        return back()->with('fail', "هذه الشركة غير موجوده قد تكون حذفت");
    }

    public function complaint(){
        $data['website'] = SiteConfig::find(1);
        if ($data['website'] == null) {
            $data['website'] = new SiteConfig;
        }
        $data['images'] = websiteimage::find(1);
        if ($data['images'] == null) {
         $data['images'] = new websiteimage;
        }
        $data['slider'] = slider::all();
        return view('website.complaint',compact('data'));
    }
}
