<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdateUser;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ( !$user->hasRole('admin') ) {
            abort(403);
        }

        $users = User::all()->except(Auth::id());
        return view('users.index', compact('users'));
    }




    public function profile()
    {
        $user = Auth::user();

        if ( $user->hasAnyRole('admin|partner|client') ) {
            $roles = Role::all();
            return view('users.my-profile', compact('roles'));
        }

        abort(403);
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    // user profile
    public function edit($id)
    {
        $user       = User::find($id);
        $roles      = Role::all();
        $auth_user  = Auth::user();

        if ( $auth_user->hasRole('admin') ) {
            return view('users.user-profile', compact('user','roles'));
        }

        if ( $auth_user->hasRole('partner') && $auth_user->id === $user->id ) {
            return view('users.user-profile', compact('user','roles'));
        }

        abort(403);
    }


    public function update(UpdateUser $request, $id)
    {

        $user       = User::find($id);
        $auth_user  = Auth::user();

        if ( $auth_user->hasAnyRole('admin|client') ) {
            $this->updateUser($user, $request);
            return back()->withSuccess('نم الحفظ بنجاح.');
        }

        if ( $auth_user->hasRole('partner') && $auth_user->id === $user->id ) {
            $this->updateUser($user, $request);
            return back()->withSuccess('نم الحفظ بنجاح.');
        }

        abort(403);
    }



    public function destroy($user)
    {

        if ( !$user->hasRole('admin') ) {
            abort(403);
        }

        $user->delete();
        return back()->with('success', 'نم الحذف بنجاح.');
    }


    public function updateUser($user, $req){

        $user->update( $req->except(['avatar', 'roles']) );

        if ($req->hasFile('avatar')) {

            $user->avatar = $req->file('avatar')->store('users/avatars');

            $user->save();
        }

        if ( $req->filled('roles') ) {
            $user->syncRoles([$req->roles]);
        }
    }
}
