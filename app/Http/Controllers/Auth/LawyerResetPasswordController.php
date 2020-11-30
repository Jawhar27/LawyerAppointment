<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Auth;






use Password;

class LawyerResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/lawyer';

     protected  function guard(){
        return Auth::guard('lawyer');
    }
    protected function broker(){
        return Password::broker('lawyers');
    }


    public function showResetForm(Request $request, $token=null){
        return view('auth.passwords.lawyerReset')->with(
            ['token'=>$token,'email'=>$request->email]
        );

    }
}
