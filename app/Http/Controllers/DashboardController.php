<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Currency;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        if(Auth::user()->hasRole('admin'))
            return $this->admin();
        else
            return $this->user();


    }


    public function user()
    {
        return view('panel.user.dashboard')->with([
            'currencies' => Currency::all(),
            'orders' => Order::all(),
        ]);
    }

    public function admin()
    {
        $openTickets = Ticket::where('status','Open')->count();
        return view('panel.admin.dashboard')->with(['openTickets' => $openTickets]);
    }

}
