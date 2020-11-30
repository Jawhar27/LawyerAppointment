<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Appointment;
use App\User;
use App\Lawyer;
use App\AcceptedAppointment;

class ProfileController extends Controller
{
    public function index(){
        $user=Auth::user();
        $email=$user->email;
        $appointments=AcceptedAppointment::where('client_email',$email)->get();
      
        
     

        return view('Client.profile',compact('appointments','user'));
    }
}
