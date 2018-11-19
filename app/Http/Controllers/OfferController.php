<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Company;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOffer;

class OfferController extends Controller
{


    public function index()
    {

        $user = Auth::user();

        if ( $user->hasRole('admin') ) {

            $offers = Offer::all();
            return view('offers.index', compact('offers'));
        }

        if ( !is_null($user->company) && !is_null($user->company->offers) ) {

            $offers = $user->company->offers;
            return view('offers.index', compact('offers'));
        }

        abort(403);
    }



    public function create()
    {

        $user = Auth::user();

        if ( $user->hasRole('partner') ) {

             if ( !is_null($user->company) ) {

                 return view('offers.create', compact('user'));

             } else {

                return view('errors.no-company');
             }
        }

        abort(403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOffer $request)
    {

        $user = Auth::user();
        // only partner can create offers
        if ( !$user->hasRole('partner') ) {
            abort(403);
        }

        if ( !is_null($user->company) ) {

            $userCompany = $user->company->all()->first();

            $offer = Offer::create( $request->all() );

            $offer->company_id = $user->company->id;

            $offer->save();

            return back()->withSuccess('نم الحفظ بنجاح .');

        } else {

            return view('errors.no-company');
        }

    }



    public function show(Offer $offer)
    {
        //
    }


    public function edit(Offer $offer)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin') ) {
            return view('offers.edit', compact('offer'));
        }

        // partner can edit only his own company offers
        if ( $user->hasRole('partner')  ) {

            if ( !is_null($user->company) && $user->company->id === $offer->company->id ) {

                return view('offers.edit', compact('offer'));

            } else {

                return view('errors.no-company');
            }
        }
        abort(403);
    }


    public function update(Request $request, Offer $offer)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin') ) {
            $offer->update($request->all());
            return back()->with('success', 'نم الحفظ بنجاح.');
        }

        // partner can edit only his own company offers
        if ( $user->hasRole('partner')  ) {

            if ( !is_null($user->company) && $user->company->id === $offer->company->id ) {

                $offer->update($request->all());
                return back()->with('success', 'نم الحفظ بنجاح.');

            } else {

                return view('errors.no-company');
            }
        }

        abort(403);
    }


    public function destroy(Offer $offer)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin') ) {
            $offer->delete();
            return back()->with('success', 'نم الحذف بنجاح.');
        }

        // partner can delete only his own company
        if ( $user->hasRole('partner') && !is_null($user->company) && $user->company->id === $offer->company->id ) {
            $offer->delete();
            return back()->with('success', 'نم الحذف بنجاح.');
        }
        abort(403);
    }


}
