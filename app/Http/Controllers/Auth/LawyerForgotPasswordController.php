<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Password;

class LawyerForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct(){
      $this->middleware('guest:lawyer');
    }

    public function broker(){
        return Password::broker('lawyers');
    }
    public function showLinkRequestForm(){
        return view('auth.passwords.lawyerEmail');
    }
}
