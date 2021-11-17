<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    public function store(OfferRequest $request)
    {

        Offer::create(array_merge($request->all(),['user_id'=>Auth::id()]));
        return redirect()->back()->with('success', 'پیشنهاد شما با موفقیت ثبت شد.');
    }
}
