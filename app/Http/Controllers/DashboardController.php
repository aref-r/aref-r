<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        if(Auth::user()->hasRole('admin'))
            return view('panel.admin.dashboard');
        else
            return view('panel.user.dashboard');

    }

}
