<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\OrderRequest;
use App\Models\Currency;
use Illuminate\Http\Request;

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

        dd($request);

    }
}
