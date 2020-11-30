<?php

namespace App\Http\Controllers;
use App\Lawyer;
use Illuminate\Support\Facades\Auth;
use App\Appointment;
use App\AvailableTime;
use Illuminate\Http\Request;

   
use DateTime;

use Carbon\Carbon;

use \Input as Input;

class LawyerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:lawyer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lawyer=Auth::user();
        $lawyer_id=$lawyer->lawyer_id;
        $appointments=Appointment::where('lawyer_id',$lawyer_id)->latest()->get();

        $current= new Carbon();
        $current->timezone('Asia/Colombo');
        $current1=$current->format(' G');
        $date1=new DateTime();
        $date=$date1->format('Y-m-d');
        
        $date2 = (new \DateTime())->add(new \DateInterval('P1D'))->format('Y-m-d');
        $date3 = (new \DateTime())->add(new \DateInterval('P2D'))->format('Y-m-d');
        $date4 = (new \DateTime())->add(new \DateInterval('P3D'))->format('Y-m-d');
        $date5 = (new \DateTime())->add(new \DateInterval('P4D'))->format('Y-m-d');
        $date6 = (new \DateTime())->add(new \DateInterval('P5D'))->format('Y-m-d');
        $date7 = (new \DateTime())->add(new \DateInterval('P6D'))->format('Y-m-d');
        $date8 = (new \DateTime())->add(new \DateInterval('P7D'))->format('Y-m-d');

        $available1=AvailableTime::where('date',$date2)->get();
        $available2=AvailableTime::where('date',$date3)->get();
        $available3=AvailableTime::where('date',$date4)->get();
        $available4=AvailableTime::where('date',$date5)->get();
        $available5=AvailableTime::where('date',$date6)->get();
        $available6=AvailableTime::where('date',$date7)->get();
        $available7=AvailableTime::where('date',$date8)->get();
       
       
        
      

        return view('exampleLaw',compact('appointments','lawyer','current1','date','date2','date3','date4','date5','date6','date7','date8',
        'available1',
        'available2',
        'available3',
        'available4',
        'available5',
        'available6',
        'available7'
    
    
    
    ));
    }

    // public function showNeliyaLawyer(){
    //   $lawyers=Lawyer::where('district','nuwara-eliya')->get()->toArray();
    //     return view('Lawyer.neliyaLaw',compact('lawyers'));
    // }
    // public function showAppointmentForm($id){
    //     $lawyer=Lawyer::where('lawyer_id',$id)->first();
    //     return view('client.appointmentForm',compact('lawyer'));

    // }
    public function uploadImage(Request $request,$id){
        if(Input::hasFile('file')){
           $file=Input::file('file');
           $file->move('img',$file->getClientOriginalName()) ;

          
        }
        $law=Lawyer::where('lawyer_id',$id)->first();
        
        $law->profile_image=$file->getClientOriginalName();
        $law->save();
        
        
        return redirect('/lawyer')->with('mssg','Successfully Uploaded');
        
       


    }
}
