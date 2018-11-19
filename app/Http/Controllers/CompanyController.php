<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompany;
use App\Http\Requests\UpdateCompany;
use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

class CompanyController extends Controller
{


    public function index()
    {
        $user = Auth::user();

        if ( !$user->hasRole('admin') ) {
            abort(403);
        }

        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }


    public function create()
    {

        // return view('companies.create', compact('user'));
    }


    public function createCompany($id)
    {

        $user = Auth::user();

        if ( !$user->hasRole('admin') ) {
            abort(403);
        }

        $user = User::find($id);
        return view('companies.create', compact('user'));

    }



    public function store(StoreCompany $request)
    {

        $user = Auth::user();

        if ( !$user->hasRole('admin') ) {
            abort(403);
        }

        if ( $request->filled('user_id') ) {

            $user = User::find($request->user_id);

            if ( $user->company()->count() < 1 ) {

                $company = Company::create($request->all());

            } else {

                return back()->withErrors('يسمح بشركة واحده لكل مسخدم');
            }
        }

        return back()->withSuccess('نم الحفظ بنجاح.');

    }


    public function show(Company $company)
    {

    }


    public function edit(Company $company)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin') ) {
            return view('companies.edit', compact('company'));
        }

        // partner can edit only his own company
        if ( $user->hasRole('partner') && !is_null($user->company) && $user->company->id === $company->id ) {
            return view('companies.edit', compact('company'));
        }
        abort(403);
    }


    public function update(UpdateCompany $request, Company $company)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin') ) {
            $company->update($request->all());
            return back()->with('success', 'نم الحفظ بنجاح.');
        }

        // partner can update only his own company
        if ( $user->hasRole('partner') && !is_null($user->company) && $user->company->id === $company->id ) {
            $company->update($request->all());
            return back()->with('success', 'نم الحفظ بنجاح.');
        }
        abort(403);
    }


    public function destroy(Company $company)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin') ) {
            $company->delete();
            return back()->with('success', 'نم الحذف بنجاح.');
        }

        // partner can delete only his own company
        if ( $user->hasRole('partner') && !is_null($user->company) && $user->company->id === $company->id ) {
            $company->delete();
            return back()->with('success', 'نم الحذف بنجاح.');
        }
        abort(403);

    }
}
