<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\OrderRequest;
use App\Models\Currency;
use App\Models\Order;
use App\Helpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        return view('panel.user.order.create')->with([
            'currencies' => Currency::all(),
            'orders' => Order::orderBy('created_at','desc')->get(),
        ]);
    }

    public function store(OrderRequest $request)
    {
        if($request->has('terms')){
            Order::create(array_merge($request->all(),[
            'fee' => Helpers::navasan($request['currency']),
            'user_id'=>Auth::id()]));
        }else{
            Order::create(array_merge($request->all(),['user_id'=>Auth::id()]));
        }

        return view('panel.user.verify.verify')->with([
            'page' => '/user/order/index',
        ]);
    }


    public function index()
    {
        return view('panel.user.order.index')->with([
            'orders' => Auth::user()->orders()->orderby('created_at','desc')->get(),
        ]);
    }


    public function show($id)
    {
        $order = Order::findorfail($id);
        return view('panel.user.order.show')->with([
            'order' => $order,
            'offers' => $order->offers()->get(),
        ]);
    }


}
