<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\websiteimage;
use App\Http\Requests\websiteImagePostRequest;
use Hash;

class websiteImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images=websiteimage::find(1);
        if($images==null)
            $images=new websiteimage;
        return view('dashboard.websiteimage',compact('images'));
        
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
    public function store(websiteImagePostRequest $request)
    {
        //
        $image = websiteimage::create($request->all());
        if($request->hasFile('About')){
            $file=$request->About;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->About=$fileName;
            $image->save();
        }
        if($request->hasFile('entertainment')){
            $file=$request->entertainment;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->entertainment= $fileName;
            $image->save();
        }
        if($request->hasFile('education')){
            $file=$request->education;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->education=$fileName;
            $image->save();
        }
        if($request->hasFile('services')){
            $file=$request->services;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->services=$fileName;
            $image->save();
        }
        if($request->hasFile('hotel_tourism')){
            $file=$request->hotel_tourism;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->hotel_tourism=$fileName;
            $image->save();
        }
        if($request->hasFile('footer1')){
            $file=$request->footer1;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->footer1=$fileName;
            $image->save();
        }
        if($request->hasFile('footer2')){
            $file=$request->footer2;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->footer2=$fileName;
            $image->save();
        }
        if($request->hasFile('footer3')){
            $file=$request->footer3;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->footer3=$fileName;
            $image->save();
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
    public function update(websiteImagePostRequest $request, $id)
    {
        $image = websiteimage::find(1);
        if($image == null)
            $image=websiteimage::create($request->all());
        else
            $image->update($request->all());
        if($request->hasFile('About')){
            $file=$request->About;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->About=$fileName;
            $image->save();
        }
        if($request->hasFile('entertainment')){
            $file=$request->entertainment;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->entertainment= $fileName;
            $image->save();
        }
        if($request->hasFile('education')){
            $file=$request->education;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->education=$fileName;
            $image->save();
        }
        if($request->hasFile('services')){
            $file=$request->services;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->services=$fileName;
            $image->save();
        }
        if($request->hasFile('hotel_tourism')){
            $file=$request->hotel_tourism;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->hotel_tourism=$fileName;
            $image->save();
        }
        if($request->hasFile('footer1')){
            $file=$request->footer1;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->footer1=$fileName;
            $image->save();
        }
        if($request->hasFile('footer2')){
            $file=$request->footer2;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->footer2=$fileName;
            $image->save();
        }
        if($request->hasFile('footer3')){
            $file=$request->footer3;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/websiteImages',$fileName);
            $image->footer3=$fileName;
            $image->save();
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
