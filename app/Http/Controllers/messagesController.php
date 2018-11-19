<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\messagesPostRequest;
class messagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();

        if ( $user->hasRole('admin') ) {
        message::where('read','0')->update(['read' => 1]);
        $message=message::all();
        return view('dashboard.messages',compact('message'));
    }
    abort(403);
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
    public function store(messagesPostRequest $request)
    {
        //
        $message=message::create($request->all());
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
        $message=message::find($id);
        return $message;

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
            $message=message::find($id)->delete();
            return back()->with('success', 'تم الحذف بنجاح.');
         }
        abort(403);
    }
}
