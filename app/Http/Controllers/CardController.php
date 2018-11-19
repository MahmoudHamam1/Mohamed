<?php

namespace App\Http\Controllers;

use Auth;
use App\Card;
use Session;
use App\Http\Requests\StoreCard;
use App\Http\Requests\saveNewCard;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public $cardStatus = ['pending', 'active', 'expired'];


    public function createCard(Card $card)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin') ) {

            $uniqIntNumber = hexdec(uniqid());

            if (Session::has('uniq') && Session::get('uniq') != '' ) {

                $uniqIntNumber = Session::get('uniq');
            }

            Session::put('uniq', $uniqIntNumber);

            return view('cards.create-card', compact('card','uniqIntNumber'));
        }

        abort(403);
    }


    public function saveNewCard(SaveNewCard $request, Card $card)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin|partner|client') ) {

            $allInputs = $request->all();

            $uniqNumber = Session::get('uniq');

            if ( $uniqNumber != $request->card_id ) {
                $uniqNumber = hexdec(uniqid());
            }

            $allInputs['card_id'] = $uniqNumber;

            $card->update($request->all());

            $card->status = $this->cardStatus[1];

            $card->save();

            Session::forget('uniq');

            return back()->with('success', 'نم الحفظ بنجاح.');
        }

        abort(403);
    }



    public function index()
    {

        $user = Auth::user();

        if ( $user->hasRole('admin|client') ) {

            $cards = Card::all();
            return view('cards.index', compact('cards'));
        }

        abort(403);
    }



    public function create()
    {

        $user = Auth::user();

        if ( !$user->hasRole('client') ) {
            abort(403);
        }

        return view('cards.create', compact('companies'));

    }



    public function store(StoreCard $request)
    {

        $user = Auth::user();

        if ( !$user->hasRole('client') ) {
            abort(403);
        }

        $card = Card::create( $request->all() );

        $card->status = $this->cardStatus[0];

        $card->save();

        return back()->withSuccess('نم الحفظ بنجاح .');

    }




    public function show(Card $card)
    {

        $user = Auth::user();

        if ( !$user->hasRole('admin|client') ) {
            abort(403);
        }

        return view('cards.show', compact('card'));

    }



    public function edit(Card $card)
    {

        $user = Auth::user();

        if ( !$user->hasRole('admin|client') ) {
            abort(403);
        }

        return view('cards.edit', compact('card'));
    }



    public function update(Request $request, Card $card)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin|client') ) {
            $card->update($request->all());
            return back()->with('success', 'نم الحفظ بنجاح.');
        }

        abort(403);
    }



    public function destroy(Card $card)
    {

        $user = Auth::user();

        if ( $user->hasRole('admin|client') ) {
            $card->delete();
            return back()->with('success', 'نم الحذف بنجاح.');
        }

        abort(403);

    }
}
