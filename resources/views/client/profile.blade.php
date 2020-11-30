<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
  #profileImg{
      height:450px;
      width:100%;
  }
  #main-header .port-item{
      width:30%;

  }
  #main-header .port-item:hover{
      opacity:0.8;
      cursor:pointer;
  }
  #main-header .bg-black{
      color:#fff;
      background:#000;
  }
  #upload{
      margin-left:150px;
  }

  @media(min-width:1199px){
      .port-item{
          padding:4em !important;
      }

  }
  @media(max-width:768px){
     #logout{
         font-size:15px;
         padding-left:5px;
     }
  }
  </style>
    
  </head>
  <body>


    <!-- Header Section -->
    <section id="profile">
      <header id="main-header">
          <div class="row no-gutters">
               <div class="col-lg-4 col-md-5">
                  <img id="profileImg" src="img/{{ $user->profile_image}}" alt="">  
                  <a href="" class="btn btn-outline-info btn-lg " id="upload" data-toggle="modal" data-target="#uploadClientProfile"><i class="fas fa-plus "> </i>  upload photo </a> 
               </div>
               <div class="col-lg-8 col-md-7">
                        <div class="d-flex flex-column">
                            <div class="p-5 bg-dark text-white">
                                  <div class="d-flex flex-row justify-content-between align-items-center">
                                        <h1 class="display-3 ">{{$user->name}}</h1>
                                                                        <div class="d-none d-md-block">
                                                                        <a href="http://twitter.com" class="text-white">
                                                                            <i class="fab fa-twitter fa-2x"></i>
                                                                            </a>
                                                                        </div>

                                                                        
                                                                        
                                                                        <div class="d-none d-md-block">
                                                                        <a href="http://facebook.com" class="text-white">
                                                                            <i class="fab fa-facebook fa-2x"></i>
                                                                            </a>
                                                                        </div>

                                                                        
                                                                        
                                                                        <div class="d-none d-md-block">
                                                                        <a href="http://instagram.com" class="text-white">
                                                                            <i class="fab fa-instagram fa-2x"></i>
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        
                                                                        <div class="d-none d-md-block">
                                                                        <a href="http://github.com" class="text-white">
                                                                            <i class="fab fa-github fa-2x"></i>
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        
                                                                        <div >
                                                                        <a href="/home" id="logout" class="btn btn-primary sm-btn-sm btn-lg">
                                                                            <i class="fas fa-sign-out-alt"></i> back To Home
                                                                            </a>

                                                                        
                                                                        </div>

                                        </div>
                                  </div>

                                  <div class="p-4 bg-black">
                                     Experienced Full time Cricketer
                                  </div>

                                  <div class="d-flex flex-row text-white align-items-stretch text-center">
                                          <div class="port-item p-4 text-dark" data-toggle="collapse" data-target="#editProfile">
                                          <i class="fas fa-user-edit fa-2x d-block"></i>
                                             <span class="d-none d-sm-block">Edit Profile</span>
                                          </div>
                                          <div class="port-item p-4 text-dark" data-toggle="collapse" data-target="#doAppointments">
                                          <i class="fas fa-bookmark fa-2x d-block"></i>
                                             <span class="d-none d-sm-block">Do Appointments</span>
                                          </div>
                                          <div class="port-item p-4 text-dark" data-toggle="collapse" data-target="#appointmentDetails">
                                          <i class="fa fa-question-circle fa-2x d-block"></i>
                                             <span class="d-none d-sm-block">AppointmentDetails</span>
                                          </div>
                                          <div class="port-item p-4 text-dark" data-toggle="collapse" data-target="#comment">
                                          <i class="fas fa-comments fa-2x d-block"></i>
                                             <span class="d-none d-sm-block">Comments</span>
                                          </div>
                                  </div>

                            
                    </div>
               </div>
          </div>
       </header>


       <!-- Home -->
               <div id="editProfile" class="collapse">
                    <div class="card card-body  text-dark py-5">
                          <h2> welcome to my page</h2>
                          <p class="lead">here we can identify and mantain our appointments </p>
                    </div>
               </div>


               <!-- DO APPOINTMENTS -->
               <div id="doAppointments" class="collapse">
                    <div class="card card-body text-dark py-5">
                          
                    <h1>Do Appointment.......</h1>
                    <a href="/clientHome" class="btn btn-info">Search For Lawyers To Make Appointments</a>
                          
                    </div>
               </div>


               <!-- Appointment Details-->
               <div id="appointmentDetails" class="collapse">
                    <div class="card card-body text-dark py-5">
                          
                  
                   <div class="card mt-5">
                            <div class="card-header">
                                 <h4>Latest Appointments </h4>
                            </div>
                         

                          
                            <table class="table table-striped">
                                  <thead class="thead-dark">
                                       <tr>
                                          <th> lawyer_id</th>
                                          <th> lawyer Name</th>
                                       
                                          <th> Type Of Legal Issue</th>
                                          <th> Description</th>
                                          <th> Date</th>
                                          <th> Time</th>
                                       </tr>
                                  </thead>
                                  <tbody>
                                
                                  @foreach($appointments as $appointment)
                                
                                       <tr class="bg-secondary text-white">
                                          <td>{{$appointment->lawyer_id}}</td>
                                          <td>{{ $appointment->lawyer_name}}</td>
                                          <td>@foreach( $appointment->type_of_legal_issues as $type_of_issues)
                                              {{$type_of_issues}}<br>
                                          @endforeach
                                          
                                          
                                          </td>
                                          <td>{{ $appointment->description}}</td>
                                          
                                          <td>{{ $appointment->date}}</td>
                                          <td>{{ $appointment->time}}</td>
                                        
                                       </tr>
                                       @endforeach
                                      
                                 

                                    
                                  </tbody>
                            </table>
                            




                          



                      </div>
                  
                    </div>
               </div>

               <!--Comments-->
               <div id="comment" class="collapse">
                    <div class="card card-body text-dark py-5">
                          
                    <h1>Comments.......</h1>
                          
                    </div>
               </div>



              <!--Footer section-->
             
        <section id="main-footer" class="bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col text-center py-4">
                         <h4>Client Profile</h4>
                         <p> Copyright &copy; <span id="year"></span></p>
                         <button class="btn btn-primary">Contact Us</button>
                    </div>
                </div>
            </div>
        </section>

      







    <!-- EDIT Profile MODAL -->



    <div class="modal fade text-dark" id="uploadClientProfile">
                <div class="modal-dialog">
                     <div class="modal-content">
                          <div class="modal-header bg-light text-dark">
                                 <h5 class="modal-title text-success">choose your profile image!</h5>
                                     <button class="close bg-light" data-dismiss="modal">
                                     <span>&times;</span>
                                     </button>
                                
                          </div>
                          <div class="modal-body">
                          <form action="uploadClientImage/{{$user->id}}" method="post" enctype="multipart/form-data">
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










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>


//   //init scroll spy
//   $('body').scrollspy({target: '#main-nav'});

  </script>
</body>
</html>