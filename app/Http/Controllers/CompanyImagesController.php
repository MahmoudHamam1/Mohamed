<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Auth;
use App\CompanyImage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompany;
use App\Http\Requests\StoreCompanyImage;
use Illuminate\Support\Facades\Storage;

class CompanyImagesController extends Controller
{

    public function index()
    {

    }


    public function create()
    {

        $user    = Auth::user();

        $company = $user->company;

        if ( $user->hasRole('admin') ) {
            abort(403);
        }

        if ( is_null($company) ){
            return view('errors.no-company');
        }

        if ( $user->hasRole('partner') ) {
            return view('companyImage.create', compact('company'));
        }

        abort(403);
    }


    public function store(StoreCompanyImage $request)
    {

        // dd($request->all());


        $user = Auth::user();

        if ( !$user->hasRole('partner') ) {
            abort(403);
        }

        $company = $user->company;

        if ( is_null($company) ){
            return view('errors.no-company');
        }

        if ( !is_null($user->company->images) ) {

            $companyImage = $company->images()->first();

        } elseif ( is_null($user->company->images) ) {

            $companyImage = new CompanyImage;
        }

        if ($request->hasFile('slider_1') ) { $companyImage->slider_1 = $request->file('slider_1')->store('companies/sliders');}
        if ($request->hasFile('slider_2') ) { $companyImage->slider_2 = $request->file('slider_2')->store('companies/sliders');}
        if ($request->hasFile('slider_3') ) { $companyImage->slider_3 = $request->file('slider_3')->store('companies/sliders');}
        if ($request->hasFile('slider_4') ) { $companyImage->slider_4 = $request->file('slider_4')->store('companies/sliders');}
        if ($request->hasFile('slider_5') ) { $companyImage->slider_5 = $request->file('slider_5')->store('companies/sliders');}
        if ($request->hasFile('offer_logo') ) { $companyImage->offer_logo = $request->file('offer_logo')->store('companies/offer_logos');}
        if ($request->hasFile('company_logo') ) { $companyImage->company_logo = $request->file('company_logo')->store('companies/logos');}

        $companyImage->company_id = $company->id;

        $companyImage->save();

        return back()->with('success', 'نم الحفظ بنجاح.');
    }


    public function show(Company $company)
    {

    }


    public function edit($id)
    {

        $companyImage = CompanyImage::find($id);

        $user    = Auth::user();

        if ( !$user->hasRole('admin|partner') ) {

            abort(403);
        }


        if ( $user->hasRole('partner') ) {

            // dd($companyImage);
            $company = $user->company;

            if ( is_null($company) ) {
                return view('errors.no-company');
            }

            if ( !is_null($companyImage) ){

                if ( $user->hasRole('partner') && $company->images->id != $companyImage->id ) {
                    abort(403);
                }
            }
        }

        return view('companyImage.edit', [

            'companyimages' => $companyImage
        ]);



    }




    public function update(Request $request, Company $company)
    {
        //
    }


    public function destroy(Company $company)
    {
        //
    }


    public function deleteImage(Request $request, $compnayid, $imagetype ) {


        $user    = Auth::user();

        if ( $user->hasRole('admin|partner') ) {

            $company = $user->company;
            $companyimages = CompanyImage::find($compnayid);

            if ( !is_null($companyimages) ){

                if ( $user->hasRole('partner') && $company->images->id != $companyimages->id ) {
                    abort(403);
                }

                $img_types = ["company_logo", "offer_logo", "slider_1", "slider_2", "slider_3", "slider_4", "slider_5"];

                if ( !is_null($companyimages) && in_array($imagetype, $img_types) ){

                    Storage::delete($companyimages->getAttributes()[$imagetype]);

                    $companyimages[$imagetype] = '';

                    $companyimages->save();

                    return back()->with('success', 'نم الحذف بنجاح.');
                }
            }

        }


    }



}
