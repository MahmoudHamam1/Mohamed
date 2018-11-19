<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complain;
use Auth;
use App\Http\Requests\complainPostRequest;
class complaint extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints=complain::all();
        return view('dashboard.complaint',compact('complaints'));
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
    public function store(complainPostRequest $request)
    {
        //
       $complaint=complain::create($request->all());
       return back()->with('success', 'تم الارسال بنجاح.');
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
        $complaint=complain::find($id);
        return $complaint;
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
    public function update(Request $request, $id)
    {
        //
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
        $user = Auth::user();
        if ( $user->hasRole('admin') ) {
            $complaint=complain::find($id)->delete();
            return back()->with('success', 'تم الحذف بنجاح.');
         }
        abort(403);
    }
}
