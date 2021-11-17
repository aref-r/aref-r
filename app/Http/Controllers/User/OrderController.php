<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\OrderRequest;
use App\Models\Currency;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        return view('panel.user.order.create')->with([
            'currencies' => Currency::all(),
        ]);
    }

    public function store(OrderRequest $request)
    {
        Order::create(array_merge($request->all(),['user_id'=>Auth::id()]));

        return redirect()->back()->with('success', 'سفارش با موفیقت ثبت شد.');
    }


    public function index()
    {
        return view('panel.user.order.index')->with([
            'orders' => Order::all(),
        ]);
    }


    public function show($id)
    {
        return view('panel.user.order.show')->with([
            'order' => Order::findorfail($id),
        ]);
    }
}
