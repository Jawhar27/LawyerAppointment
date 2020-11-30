<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Appointment;
use App\Lawyer;
use App\AcceptedAppointment;
use App\declinedAppointment;
use App\AvailableTime;

class AppointmentController extends Controller
{
    public function store(Request $request,$id,$date){
        $this->validate($request,[
            // 'name'=>'required',
            // 'email'=>'required',
            
            'description'=>'required',
            // 'gender'=>'required',
            // 'date'=>'required',
            'time'=>'required',
            'type_of_legal_issues'=>'required',
           
        
          
        ]);  
        $user=Auth::user();
     
      
        $lawyer=Lawyer::where('lawyer_id',$id)->get();
        foreach($lawyer as $law){
            $laws=$law->name;
        }
        
        $appointment=new Appointment();
        $appointment->client_name=$user->name;
        $appointment->client_email=$user->email; 
      
        $appointment->description=request('description');
   
        $appointment->type_of_legal_issues=request('type_of_legal_issues');
     
        $appointment->date=$date;
        $appointment->time=request('time');
        $appointment->lawyer_id=$id;
        $appointment->lawyer_name=$laws;
        $appointment->current_status="requested";
       
    
    
       

        $appointment->save();
       return redirect('/neliya')->with('msg','Your Appointment was successfully completed!!');
    }

    public function acceptStatus($id){
        $appoint=Appointment::where('id',$id)->get();
      
         $available=new AvailableTime();
        
         
        $appointments=new AcceptedAppointment();
          foreach($appoint as $app){
              
        $appointments->client_name=$app->client_name;
        $appointments->client_email=$app->client_email;
        $appointments->description=$app->description;
        $appointments->type_of_legal_issues=$app->type_of_legal_issues;
        $appointments->date=$app->date;
        $appointments->time=$app->time;
        $appointments->lawyer_name=$app->lawyer_name;
        $appointments->lawyer_id=$app->lawyer_id;
        $appointments->current_status="Accepted";

        
        $ava=AvailableTime::where('lawyer_id',$app->lawyer_id)->where('date',$app->date)->where('availableTime',$app->time)->get();
        if($ava==null){
        $available->lawyer_id=$app->lawyer_id;
        $available->date=$app->date;
        $available->availableTime=$app->time;
        $available->currentStatus="Disable";
        $available->save();
        }
        else{
          $ava=AvailableTime::where('lawyer_id',$app->lawyer_id)->where('date',$app->date)->where('availableTime',$app->time)->update(['currentStatus'=>"Disable"]);
        }

          }



          $appointments->save();
          
          $deleteApp=Appointment::where('id',$id)->forceDelete();

        return redirect('/lawyer')->with('msg','Accepted');

     

    }
    public function declineStatus($id){
        $appoint=Appointment::where('id',$id)->get();

        $appointments=new declinedAppointment();
        foreach($appoint as $app){
            
      $appointments->client_name=$app->client_name;
      $appointments->client_email=$app->client_email;
      $appointments->description=$app->description;
      $appointments->type_of_legal_issues=$app->type_of_legal_issues;
      $appointments->date=$app->date;
      $appointments->lawyer_name=$app->lawyer_name;
      $appointments->lawyer_id=$app->lawyer_id;
      $appointments->current_status="declined";

           
        }
        $appointments->save();
          $deleteApp=Appointment::where('id',$id)->forceDelete();
        return redirect('/lawyer')->with('msg1','Declined');

     

    }


    public function updateAppointment($id){
      $date=request('date');
      $time=request('time');
      $appoint=Appointment::where('id',$id)->get();
      $available=new AvailableTime();
      
     



      $appointments=new AcceptedAppointment();
      foreach($appoint as $app){
          
    $appointments->client_name=$app->client_name;
    $appointments->client_email=$app->client_email;
    $appointments->description=$app->description;
    $appointments->type_of_legal_issues=$app->type_of_legal_issues;
    $appointments->date=$date;
    $appointments->time=$time;
    $appointments->lawyer_name=$app->lawyer_name;
    $appointments->lawyer_id=$app->lawyer_id;
    $appointments->current_status="Accepted";


   
    $available->lawyer_id=$app->lawyer_id;
    $available->date=$date;
    $available->availableTime=$time;
    $available->currentStatus="Disable";
   

         
      }
      $appointments->save();
      $available->save();
      $deleteApp=Appointment::where('id',$id)->forceDelete();

    return redirect('/lawyer')->with('msg','Updated');
      
    }
}
