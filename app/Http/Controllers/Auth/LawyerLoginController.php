<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class LawyerLoginController extends Controller
{
    //

    public function __construct()
    {
      
       $this->middleware('guest:lawyer')->except('logout');
    
    }

    public function showLoginForm(){
       
       
        
        return view('auth.lawyerLogin');
    }
 

    public function login(Request $request){

        $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:8',
        
        ]);
        

        if (Auth::guard('lawyer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
           //if successful go to lawyer dashboard
            //  $current= new Carbon();
            //  echo $current;
            
            //  return view('exampleLaw', compact('current'));

          
             return redirect()->intended(route('lawyer.dashboard'));
            
        
            
            
        }
        //unsuccessful go back to login
        return back()->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request){
        Auth::guard('lawyer')->logout();
        return redirect('/');
    }
}







