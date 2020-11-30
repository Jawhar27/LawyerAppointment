
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
       #profileImg{
           height:100%;
           width:100%;
       }
      
    
      @media(min-width:768px){
        #time{
          margin-left:100px;
      }
      }
      @media(min-width:1100px){
        #time{
          margin-left:250px;
      }
      }
      @media(max-width:768px){
        #time{
          margin-left:30px;
          margin-right:10px;
      }

  }
  
   
    </style>
  </head>
  <body>
    <!--Navbar Section -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
         <a href="#" class="navbar-brand">Lawyer</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user " > </i>   {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('lawyer.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
        </div>
      </div>
    </nav>

        <!--Lawyer Profile-->
        <div class="modal fade text-dark" id="profileOfLawyer">
                <div class="modal-dialog">
                     <div class="modal-content">
                          <div class="modal-header bg-dark text-white">
                                 <h5 class="modal-title">Profile</h5>
                                     <button class="close" data-dismiss="modal">
                                     <span>&times;</span>
                                     </button>
                                
                          </div>
                          <div class="modal-body">
                             
                          </div>
                     </div>
                </div>
          </div>
           

           <!-- Header Section-->

   <header id="main-header" class="py-2 bg-primary text-white">

       <div class="container">
            <div class="row">
                 <div class="col-md-6">
                      <h1><i class="fas fa-cog"></i><span>DASHBOARD</span></h1>
                 </div>
            </div>
       </div>
   </header>


  <!-- Actions-->
  <section id="actions" class="py-4mb-4 bg-white">
     <div class="container">
            <div class="row mt-4">
                            <div class="column-md-8">
                            <h3 class="text-danger "> Hi {{$lawyer->name}}
                        
                            <!-- Saying greetings -->
                          @if($current1 < 12)
                              Good Morning
                              @elseif($current1>=12 && $current1 < 15)
                                    Good Afternoon
                                @else
                                    Good Evening
                              


                              
                            @endif
                            </h3>
                            </div>
                      <div class="column-md-4 ml-5">
                     <h3> {{ $date}}</h3>
                      </div>
              
              </div>
     </div>
  </section>

            <!-- updating time for appointments -->
<br>
<div class="row">
            <div class="col-md-6" id="time">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Make changes in available times for <span class="badge badge-info">NEXT 7 DAYS</span>
                                            
                                    </button>
                                    <div><h4 class=" msg text-success bg-light text-center">{{ session('mssssg')}} </h4></div>
                                    <div class="collapse" id="collapseExample">
                                       <div class="card card-body">
                                                  <h6></h6>
                                                    <form action="/updateTime1/{{$lawyer->lawyer_id}}" method="POST">
                                                    @csrf

                                                
                  
                                               
                  <label  class="label  control-label text-success ">Choose Date </label>
                  <div class="">
                  <select class="form-control" name="date">
                                                              <option>{{$date2}}</option>
                                                              <option>{{$date3}}</option>
                                                              <option>{{$date4}}</option>
                                                              <option>{{$date5}}</option>
                                                              <option>{{$date6}}</option>
                                                              <option>{{$date7}}</option>
                                                              <option>{{$date8}}</option>
                                                            
                                            
                                                        </select>
                
                  </div>
                  
                                              <label class="label  control-label text-success" >Available Time</label>
                                                    <div class="">  
                                                        <select class="form-control" name="time">
                                                              <option>09:00:00-12:00:00</option>
                                                              <option>13:00:00-14:30:00</option>
                                                              <option>15:00:00-17:00:00</option>
                                            
                                                        </select><br>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col ml-5">
                                                        <input type="radio"  name="status" value="Active">Active<br>
                                                         <input type="radio"  name="status" value="Disable">Disable<br>
                                                         </div>
                                                         <div class="col mt-3">
                                                        <input class="ml-5 bg-info text-white" type="submit" name="submit" value="Change">
                                                        </div>
                                                        </div>
                                                        
                                                    </form>
                                                    <!-- <h6>1pm-2.30pm</h6>
                                                    <form>
                                                    @csrf
                                                        
                                                        <input type="radio"  name="status" value="Active"><small>Active</small><br>
                                                         <input type="radio"  name="status" value="Disable"><small>Disable</small>
                                                        <input class="ml-5 bg-info text-white" type="submit" name="submit" value="Change">
                                                        
                                                    </form>
                                                    <h6>3.30-5pm</h6>
                                                    <form>
                                                    @csrf
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optradio" checked> Active
                                                        </label>
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optradio"> Disable
                                                        </label>
                                                        <input class="ml-5 bg-info text-white" type="submit" name="submit" value="Change">
                                                        
                                                    </form> -->
                                                    <a href="" class="ml-5 mt-3"><i class="	fas fa-plus"></i> Add Additional Time</a>
                                                    </form>  
                                         </div>
                                    </div>
                </div>


<!-- available Times for Next 7 days -->
                <div class="col-md-6" id="time">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExamplee" aria-expanded="false" aria-controls="collapseExample">
                                    available Times for Next 7 days
                                    </button>
                               
                                    <div class="collapse" id="collapseExamplee">
                                       <div class="card card-body">
                                              
                                       <div>
  <h3>{{$date2}}</h3>
  @foreach($available1 as $ava)
      {{$ava->availableTime}}-----------{{$ava->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <h3>{{$date3}}</h3>
  @foreach($available2 as $aval)
      {{$aval->availableTime}}-----------{{$aval->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <h3>{{$date4}}</h3>
  @foreach($available3 as $avall)
      {{$avall->availableTime}}-----------{{$avall->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <h3>{{$date5}}</h3>
  @foreach($available4 as $avalll)
      {{$avalll->availableTime}}--------------{{$avalll->currentStatus}}
                                       
                                                 <br>
  @endforeach
  
  </div>
  <div>
   <h3>{{$date6}}</h3>
  @foreach($available5 as $avaa)
      {{$avaa->availableTime}}-----------{{$avaa->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <h3>{{$date7}}</h3>
  @foreach($available6 as $avaaa)
      {{$avaaa->availableTime}}-----------{{$avaaa->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <h3>{{$date8}}</h3>
  @foreach($available7 as $avax)
     {{$avax->availableTime}}-----------{{$avax->currentStatus}} <br>
  @endforeach
  
  </div>
                                                   
                                         </div>
                                    </div>
                </div>






























                </div>
               
                 <!-- <div class="col-md-3">
                       <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addAppointments">
                       <i class="fas fa-plus"></i>Add Appointments
                         </a>
                 </div> -->
                 <!-- <div class="col-md-3">
                       <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#detailsOfAppointments">
                       <i class="fas fa-plus"></i>Appointment Details
                         </a>
                 </div> -->
                 <!-- <div class="col-md-3">
                       <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#editProfile">
                       <i class="fas fa-plus"></i>editProfile
                         </a>
                 </div> -->
                 


  <!--Appointments-->
    <section id="appointments">
         <div class="container">
            <div class="row">
            <div class="col-md-2 mt-5">
                       <div class="card text-center bg-white text-dark mb-3">
                             <div class="card-body">
                             
                                  <h5>My Profile </h5>
                                  
                                  <img src="img/{{$lawyer->profile_image}}" class="img-fluid" id="profileImg">
                                  <div class="col">
                                  <p class=" msg text-light text-center  bg-success rounded ">{{ session('mssg')}} </p>
                                                            </div>
                                  <br>
                                  <a href="" class="btn btn-outline-success btn-sm"data-toggle="modal" data-target="#uploadProfile"><i class="	fas fa-plus"> </i>  upload photo </a><br><br>
                                  <a href="" class="btn btn-outline-primary btn-sm">view</a>
                             </div>
                       </div>
                      
              </div>
            
                 <div class="col-md-8">

                      <div class="card mt-5">
                            <div class="card-header">
                            <p class=" msg text-light text-center  bg-success rounded ">{{ session('msg')}} </p>
                            <p class=" msg text-light text-center  bg-danger rounded ">{{ session('msg1')}} </p>
                                 <h4>Latest Appointments </h4>
                            
                            </div>
                            <table class="table table-striped">
                                  <thead class="thead-dark">
                                       <tr>
                                          
                                          <th> Client Email</th>
                                          <th> Description about issue</th>
                                          <th> Type Of Legal Issue</th>
                                          <th> Date</th>
                                          <th> Time</th>
                                       </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($appointments as $appointment)
                                       <tr>
                                          <td>{{$appointment->client_name}}</td>
                                          <td>{{$appointment->description}}</td>
                                          <td>@foreach( $appointment->type_of_legal_issues as $type_of_issues)
                                              {{$type_of_issues}}<br>
                                          @endforeach
                                          
                                          
                                          </td>
                                          <td>{{$appointment->date}}</td>
                                          <td>{{$appointment->time}}</td>
                                
                                       </tr>
                                       <tr>
                                       <td></td>
                                  <td>
                                       <a href="/appointmentAccept/{{$appointment->id}}" class="btn btn-success btn-sm">
                                             <i class="fas fa-angle-double-right"></i> Accept
                                             </a>
                                            
                                       </td>
                                       <td>
                                       <a href="/appointmentDecline/{{$appointment->id}}" class="btn btn-danger btn-sm">
                                             <i class="fas fa-angle-double-right"></i> Decline
                                             </a>
                                       </td>
                                       <td>
                                       <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                       <i class="fas fa-angle-double-right"></i>Update
                                          </button>
                                       </td>
                                  </tr>
                                  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="border border-1px">
        <h4 class="text-success text-center">Current Status For Next 7 Days</h4>
                                                 
      <div>
<b> {{$date2}}</b><br>
  @foreach($available1 as $ava)
      {{$ava->availableTime}}-----------{{$ava->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <b> {{$date3}}</b><br>
  @foreach($available2 as $aval)
      {{$aval->availableTime}}-----------{{$aval->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <b> {{$date4}}</b><br>
  @foreach($available3 as $avall)
      {{$avall->availableTime}}-----------{{$avall->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <b> {{$date5}}</b><br>
  @foreach($available4 as $avalll)
      {{$avalll->availableTime}}--------------{{$avalll->currentStatus}}
                                       
                                                 <br>
  @endforeach
  
  </div>
  <div>
  <b>  {{$date6}}</b><br>
  @foreach($available5 as $avaa)
      {{$avaa->availableTime}}-----------{{$avaa->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <b>  {{$date7}}</b><br>
  @foreach($available6 as $avaaa)
      {{$avaaa->availableTime}}-----------{{$avaaa->currentStatus}}<br>
  @endforeach
  
  </div>
  <div>
  <b> {{$date8}}</b> <br>
  @foreach($available7 as $avax)
     {{$avax->availableTime}}-----------{{$avax->currentStatus}} <br>
  @endforeach
  
  </div>
      
      
      
      
      
      
      
      
      
      
      
      </div>

      <div class="mt-4">
      
                        <form action="/updateAppointment/{{$appointment->id}}" method="POST">
                                                    @csrf

                                                
                  
                                               
                  <label  class="label  control-label text-success ">Choose Date </label>
                  <div class="">
               <input type="date" name="date" id="date">
                
                  </div>
                  <label class="label  control-label text-success" >Time</label>
                                                    <div class="">  
                                                        <select class="form-control" name="time">
                                                              <option>09:00:00-12:00:00</option>
                                                              <option>13:00:00-14:30:00</option>
                                                              <option>15:00:00-17:00:00</option>
                                            
                                                        </select><br>
                                                        </div>
                                                        <input class="btn btn-success btn-block" type="submit" name="submit" value="Update">
                  </form>
      </div>
      </div>
    
      <div class="modal-footer">
       
    








                                 
        
      </div>
    </div>
  </div>
</div>

                                  @endforeach
                                 
                                  
                                       <!-- <tr>
                                       <td>
                                       <a href="#" class="btn btn-secondary btn-sm">
                                             <i class="fas fa-angle-double-right"></i> Accept
                                             </a>
                                       </td>
                                       <td>
                                       <a href="#" class="btn btn-secondary btn-sm">
                                             <i class="fas fa-angle-double-right"></i> Update
                                             </a>
                                       </td>
                                       <td>
                                             <a href="#" class="btn btn-secondary btn-sm">
                                             <i class="fas fa-angle-double-right"></i> Remove
                                             </a>
                                          </td>
                                       </td>
                                       </tr> -->
                                  </tbody>
                            </table>

                          



                      </div>
                 </div>



                 <div class="col-md-2 mt-5">
                     

                       <div class="card text-center bg-warning text-white mb-3">
                             <div class="card-body">
                                  <h3>Appointment requests</h3>
                                  <h4 class="display-4">
                                    <i class="fas fa-pencil-alt"></i> 6
                                  </h4>
                                  <a href="" class="btn btn-outline-light btn-sm">view</a>
                             </div>
                       </div>
                       <div class="card text-center bg-danger text-white mb-3">
                             <div class="card-body">
                                  <h3>Current Appointments</h3>
                                  <h4 class="display-4">
                                    <i class="fas fa-pencil-alt"></i> 6
                                  </h4>
                                  <a href="" class="btn btn-outline-light btn-sm">view</a>
                             </div>
                       </div>
                       <div class="card text-center bg-success text-white mb-3">
                             <div class="card-body">
                                  <h3>Past Appointments</h3>
                                  <h4 class="display-4">
                                    <i class="fas fa-pencil-alt"></i> 6
                                  </h4>
                                  <a href="" class="btn btn-outline-light btn-sm">view</a>
                             </div>
                       </div>


                 </div>
            </div>
         </div>
    </section>



  <!-- EDIT Profile MODAL -->



  <div class="modal fade text-dark" id="uploadProfile">
                <div class="modal-dialog">
                     <div class="modal-content">
                          <div class="modal-header bg-light text-dark">
                                 <h5 class="modal-title text-success">choose your profile image!</h5>
                                     <button class="close bg-light" data-dismiss="modal">
                                     <span>&times;</span>
                                     </button>
                                
                          </div>
                          <div class="modal-body">
                          <form action="/uploadImage/{{$lawyer['lawyer_id']}}" method="post" enctype="multipart/form-data">
                                  @csrf
                                      <div class="form-group">
                                            
                                            <div class="custom-file">
                                            <input type="file" name="file" id="file">
                                            
                                            </div>
                                      </div>
                                      <input type="submit" class="btn btn-info" value="Upload">
                                  </form>
                           
                          </div>
                     </div>
                </div>
          </div>
<!-- 
  <div class="modal fade" id="editProfile" >
         <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                       <h5 class="modal-title">
                           Profile
                       </h5>
                       <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                       </button>
                    </div>
                    <div class="modal-body">
                    <form>
                                      <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                            <label for="LegalCategory">Legal Category</label>
                                            <select class="form-control">
                                               <option value="civil">Civil Law</option>
                                               <option value="criminal">Criminal Law</option>
                                               <option value="">Civil Law</option>
                                               <option value="">Civil Law</option>
                                            </select>

                                      </div>
                                      <div class="form-group">
                                            <label for="image">Upload image</label>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image">
                                            <label for="image" class="custom-file-label">Choose File</label>
                                            </div>
                                      </div>
                                  </form>
                    </div>
                 </div>
         </div>
  </div> -->
<!-- Button trigger modal -->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

  <script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  
  </script>
  </body>
</html>





















