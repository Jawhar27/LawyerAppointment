<?php

namespace App\Http\Controllers;
use App\Lawyer;
use App\AvailableTime;
use Illuminate\Support\Facades\Request;
// use Illuminate\Http\Request;
use DateTime;
// use Illuminate\Support\Facades\Input;
Request::input();

use \Input as Input;




class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        
        
        return view('client.home');
    }
    

    public function showNeliyaLawyer(){


      $date2 = (new \DateTime())->add(new \DateInterval('P1D'))->format('Y-m-d');
      $date3 = (new \DateTime())->add(new \DateInterval('P2D'))->format('Y-m-d');
      $date4 = (new \DateTime())->add(new \DateInterval('P3D'))->format('Y-m-d');
      $date5 = (new \DateTime())->add(new \DateInterval('P4D'))->format('Y-m-d');
      $date6 = (new \DateTime())->add(new \DateInterval('P5D'))->format('Y-m-d');
      $date7 = (new \DateTime())->add(new \DateInterval('P6D'))->format('Y-m-d');
      $date8 = (new \DateTime())->add(new \DateInterval('P7D'))->format('Y-m-d');
      $lawyers=Lawyer::where('district','nuwara-eliya')->get()->toArray();
        return view('Lawyer.neliyaLaw',compact('lawyers','date2','date3','date4','date5','date6','date7','date8'));






    }
    public function showAppointmentForm($id){

        

        $date1=new DateTime();
        $date=$date1->format('Y-m-d');
        $lawyer=Lawyer::where('lawyer_id',$id)->first();
        $lawId=$id;

     
     $requestedDate=request('date');
     $avail=AvailableTime::where('lawyer_id',$id)->get();
    
     
 
        $available=AvailableTime::where('lawyer_id',$id)->where('date',$requestedDate)->get();
        $availableTime=AvailableTime::where('lawyer_id',$id)->where('date',$requestedDate)->where('currentStatus',"Active")->get();
       
        return view('client.appointmentForm',compact('lawyer','available','date','availableTime','requestedDate','lawId'));
       
    
     }
     
      
     
  
     
    
    
    

        
        

     

    

  

  






    public function searchLawyer(){
        
        $q = Request::get ( 'q' );
           
     
                                
                                    $lawyer = Lawyer::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
                                                      
                                                        
                                    if(count($lawyer) > 0){
                                    
                                            return view('showDetails',compact('lawyer'))->withDetails($lawyer)->withQuery ( $q );
                                        
                                      
                                    }
                                    else {
                                        return redirect ('/home')->with('msg2','No Details found. Try to search again !');
                                        }

                                
                           
                          
                                     
                                            }


                  public function filterDistrict($id){
                     
                      $dis = Request::get ( 'district' );
                      
                    
                      $lawyer = Lawyer::where('name','LIKE','%'.$id.'%')->orWhere('email','LIKE','%'.$id.'%')->get();
                      
                               
                                return view('showByDistrict',compact('lawyer','dis','id'));
                                
                               
                               
                                 
                                
                     
                  }

                  public function filterType($id){
                    $dis = Request::get ( 'specialInterest' );
                   
                    $lawyer = Lawyer::where('name','LIKE','%'.$id.'%')->orWhere('email','LIKE','%'.$id.'%')->get();
                   

                   
                      
                      
                  
                    return view('showByType',compact('lawyer','dis','id'));

                  }


                  public function filterDistrictAndType($id){
                      $dis = Request::get ( 'district' );
                      $interest=Request::get ( 'specialInterest' );
                    
                      
                    $lawyer = Lawyer::where('name','LIKE','%'.$id.'%')->orWhere('email','LIKE','%'.$id.'%')->get();

                    return view('showByDistrictAndType',compact('lawyer','dis','interest','id'));
                  }





       
       
                

              
                        
        
                       
       
       
       
       
            
       
      
      
        
        //         
                   
                  
       
            
       
              

        
        }
      

            
         
        

        

       

        


    

   
    
   
    

   

