<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Notifications\SendOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class OfferController extends Controller
{
    public function store(OfferRequest $request)
    {
        $offer = Offer::create(array_merge($request->all(),['user_id'=>Auth::id()]));
        $order = $offer->order()->first();

        Notification::send($users, new SendOffer());


        return redirect()->back()->with('success', 'پیشنهاد شما با موفقیت ثبت شد.');
    }
}
