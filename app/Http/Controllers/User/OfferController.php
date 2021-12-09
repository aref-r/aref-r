<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Http\Requests\AcceptOfferRequest;
use App\Models\Offer;
use App\Notifications\SendOffer;
use App\Notifications\AcceptOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class OfferController extends Controller
{


    public function index()
    {
        return view('panel.user.offer.index')->with([
            'activeOffers' => Auth::user()->offers()->where('is_accept','!=',1)->orderBy('created_at','desc')->get(),
            'acceptOffers' => Auth::user()->offers()->where('is_accept',1)->orderBy('created_at','desc')->get(),
        ]);
    }

    public function store(OfferRequest $request)
    {
        $offer = Offer::create(array_merge($request->all(),['user_id'=>Auth::id()]));
        $order = $offer->order()->first();

        Notification::send($order->user()->get(), new SendOffer());

        return redirect()->back()->with('success', 'پیشنهاد شما با موفقیت ثبت شد.');
    }

    public function accept_offer(AcceptOfferRequest $request)
    {
        // accept offer
        $offer = Offer::findorfail($request->get('offer_id'));
        $offer->is_accept = 1;
        $offer->save();
        // send notification for offer creator
        Notification::send($offer->user()->get(), new AcceptOffer());

        //checked order
        $order = $offer->order;
        $order->is_accept = 1;
        $order->save();
        return redirect()->back()->with('success', 'پیشنهاد شما با موفقیت تایید شد.');
    }
}
