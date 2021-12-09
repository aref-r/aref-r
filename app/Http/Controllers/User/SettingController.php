<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userInfo = Setting::where('user_id', Auth::user()->id)->first();
        return view('panel.user.setting', compact('userInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'DOB' => 'max:100',
            'present_address' => 'max:255',
            'permanent_address' => 'max:255',
            'city' => 'max:100',
            'postal_code' => 'max:50',
            'country' => 'max:50',
            'username' => 'required', 
            'email' => 'required', 
            'lang' => 'required', 
        ]);
        $user = Auth::user();
        $user->setting->update([
            'user_id'   => Auth::user()->id,
            'DOB' =>  $request->input('DOB'),
            'present_address'  => $request->input('present_address'),
            'permanent_address'   => $request->input('permanent_address'),
            'city'   => $request->input('city'),
            'postal_code'   => $request->input('postal_code'),
            'country'   => $request->input('country')
        ]);

        $user->update([
            'lang' => $request->input('lang'),
            'name' => $request->input('username'),
            'email' => $request->input('email')
        ]);
           

        return redirect()->back()->with('success', 'اطلاعات با موفیقت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }

    public function storeProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'max:150',
            'profile_photo' => 'file|size:512',
        ]);
    }
}
