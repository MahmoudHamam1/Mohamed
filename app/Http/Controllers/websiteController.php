<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\websitePostRequest;
use App\SiteConfig;
use Hash;
class websiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $website=SiteConfig::find(1);
        if($website==null)
            $website=new SiteConfig;
        return view('dashboard.webSiteConfig',compact('website'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(websitePostRequest $request)
    {
        //
        $website=SiteConfig::create($request->all());
        if($request->hasFile('loadingimage')){
            $file=$request->loadingimage;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/location',$fileName);
            $website->loadingimage=$fileName;
            $website->save();
        }
        if($request->hasFile('logo')){
            $file=$request->logo;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/logo',$fileName);
            $website->logo=$fileName;
            $website->save();
        }
		return back()->with('success', 'تم الانشاء بنجاح.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(websitePostRequest $request, $id)
    {
        $website=SiteConfig::find(1);
        if($website==null){
            $this->store($request);
        }
        else{
            $website=SiteConfig::find(1)->update($request->all());
            if($request->hasFile('loadingimage')){
                $file=$request->loadingimage;
                $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
                $file->move('images/location',$fileName);
                $website->loadingimage=$fileName;
                $website->save();
            }
            if($request->hasFile('logo')){
                $file=$request->logo;
                $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
                $file->move('images/logo',$fileName);
                $website->logo=$fileName;
                $website->save();
            }
    }
        return back()->with('success', 'تم التعديل بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
