<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use \Input as Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $current= new Carbon();
        $current->timezone('Asia/Colombo');
        $current=$current->format(' G');
        return view('home',compact('current'));
    }
    public function uploadClientImage(Request $request,$id){
        if(Input::hasFile('file')){
            $file=Input::file('file');
            $file->move('img',$file->getClientOriginalName()) ;
 
           
         }
         $law=User::where('id',$id)->first();
         
         $law->profile_image=$file->getClientOriginalName();
         $law->save();
      
         return redirect('/clientprofile')->with('msssg','Successfully Uploaded');
     }
}
