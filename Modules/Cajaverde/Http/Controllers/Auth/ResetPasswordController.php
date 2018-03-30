<?php

namespace Modules\Cajaverde\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get the password reset validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'confirmed',
                'regex:' . config('cajaverde.password_regex'),
            ]
        ];
    }

    /**
     * Show form to seller where they can reset password
     *
     * @param  Request $request
     * @param  string $token
     * @return Illuminate\Http\Response
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('cajaverde::auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    
    /**
     * returns Password broker of cajaverde
     */
    public function broker()
    {
        return Password::broker('cajaverde');
    }

    /**
     * returns authentication guard of cajaverde
     */
    protected function guard()
    {
        return Auth::guard('cajaverde');
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {

        $user->password = $password;

        $user->setRememberToken(str_random(60));

        $user->save();

        event(new PasswordReset($user));

        // $this->guard()->login($user);
    }    
    
}
