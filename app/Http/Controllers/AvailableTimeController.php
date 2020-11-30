<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AvailableTime;
use DateTime;
use Carbon\Carbon;

class AvailableTimeController extends Controller
{
    public function store1(Request $request,$id){
   
   $available=AvailableTime::where('lawyer_id',$id)->where('date',request('date'))->where('availableTime',request('time'))->first();
   if($available==null){
    $time1=new AvailableTime();
         $time1->currentStatus=request('status');
         $time1->lawyer_id=$id;
         $time1->date=request('date');
         $time1->availableTime=request('time');


         $time1->save();
            return redirect('/lawyer')->with('mssssg','created');
       
   }
   
//    if ($available == null) {
//     $date1=new DateTime();
//     $date=$date1->format('Y-m-d');

//     $dt=$date1->format('Y-m-d');


//     $dt = new Carbon();
   
 
//         $time1=new AvailableTime();
      
//     $time1->currentStatus=request('status');
        
       
//     $time1->lawyer_id=$id;
//     $time1->date=request('date');
//     $time1->availableTime=request('time');
//     $time1->save();
//    return redirect('/lawyer')->with('mssssg','created');
//     }
    else{
     
        AvailableTime::where('lawyer_id',$id)->where('date',request('date'))->where('availableTime',request('time'))->update(['currentStatus'=>request('status')]);
        return redirect('/lawyer')->with('mssssg','Updated');
      
   

    
      
    }
}
    
   
    
}
