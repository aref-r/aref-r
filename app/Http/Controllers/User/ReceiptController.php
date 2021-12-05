<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReceiptRequest;
use App\Models\Order;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    public function create(Order $order)
    {
        return view('panel.user.receipt.create')->with([
            'order' => $order,
            'type' => $order->user_id == Auth::id() ? 'order' : 'offer',
        ]);
    }

    public function store(StoreReceiptRequest $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/receipt'), $imageName);
        $request['image'] = 'image/receipt' . $imageName;
        Receipt::create(array_merge($request->all(),['user_id' => Auth::id()]));
        return redirect()->back()->with('success', 'رسید شما با موفقیت ثبت شد.');
    }
}
