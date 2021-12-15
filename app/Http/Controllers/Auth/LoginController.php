<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function redirectToGoogle(Request  $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {

        try {
            $user = Socialite::driver('google')->user();

        } catch (\Exception $e) {
            return redirect(route('welcome'))->with('error' , 'مشکلی پیش آمده است');
        }

        $this->_registerOrLoginUser($user);

        return redirect(route('welcome'));
    }

    protected function _registerOrLoginUser($user)
    {

        $password = Hash::make(rand(100000000 , 200000000));

        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();

        if($existingUser){
            // log them in
            $existingUser->update([
                'password' => Hash::make($password),
                'email_verified_at' => now()
            ]);

            Auth::attempt([
                'email'     => $existingUser->email ,
                'password'  => $password
            ]);

        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->password        = Hash::make($password);
            $newUser->email_verified_at       = now();
            $newUser->last_login       = now();
            $newUser->save();

            Auth::attempt([
                'email'     => $newUser->email ,
                'password'  => $password
            ]);
        }
    }

}
