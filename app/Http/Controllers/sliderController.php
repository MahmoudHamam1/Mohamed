<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\sliderPostRequest;
use App\slider;
use Hash;
use Auth;
use App\Http\Requests\sliderUpdateRequest;
class sliderController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slider=slider::all();
        return view('dashboard.sliderConfig',compact('slider'));
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
    public function store(sliderPostRequest $request)
    { //
       /*$user = Auth::user();
        if ( $user->hasRole('admin') ) {*/
        $slider=slider::create($request->all());
        if($request->hasFile('image')){
            $file=$request->image;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/slider',$fileName);
            $slider->image=$fileName;
            $slider->save();
        }
        return back()->with('success', 'تم الانشاء بنجاح.');
//    }
//     abort(403);
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
        /*$user = Auth::user();
        if ( $user->hasRole('admin') ) {*/
        $slider=slider::find($id);
        return $slider;
    /*}
    abort(403);*/

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide=slider::find($id);
        return view('dashboard.sliderEdit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(sliderUpdateRequest $request, $id)
    {
       /* $user = Auth::user();
        if ( $user->hasRole('admin') ) {*/
        $slider=slider::find($id)->update($request->all());
        if($request->hasFile('image')){
            $file=$request->image;
            $fileName=str_replace(array('.',':','>','<','|','\\','/','"'), '',Hash::make(rand())).$file->getClientOriginalName();
            $file->move('images/slider',$fileName);
            $slider->image=$fileName;
            $slider->save();
        }
        return back()->with('success', 'تم التعديل بنجاح.');
   /* }
    abort(403);*/
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
         //
         $user = Auth::user();
         if ( $user->hasRole('admin') ) {
        $slider=slider::find($id)->delete();
        return back()->with('success', 'تم الحذف بنجاح.');
         }
         abort(403);
    }
}
