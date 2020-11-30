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
                <!-- <li class="nav-item px-2">
                    <a href="#" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">Dashboard</a>
                </li> -->
                 

                <li class="nav-item ml-auto">
                    <a href="#" class="nav-link">
                       <img src="img/profile.jpg" width="50" height="50" class="img-fluid rounded-circle">
                       <a class="btn btn-secondary ml-2 btn-sm" data-toggle="modal" data-target="#profileOfLawyer">Logout </a>
                    </a>
                </li>
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
            <div class="row mt-4  ">
            <h3 class="text-danger "> HI JAWHAR S..
           
            
               GOOD MORNING! </h3>
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
                 
            </div>
     </div>
  </section>

  <!--Appointments-->
    <section id="appointments">
         <div class="container">
            <div class="row">
            <div class="col-md-2 mt-5">
                       <div class="card text-center bg-white text-dark mb-3">
                             <div class="card-body">
                                  <h5>My Profile</h5>
                                  <img src="img/profile.jpg" class="img-fluid"><br><br>
                                  <a href="" class="btn btn-outline-primary btn-sm">view</a>
                             </div>
                       </div>
              </div>
            
                 <div class="col-md-7">

                      <div class="card mt-5">
                            <div class="card-header">
                                 <h4>Latest Appointments </h4>
                            </div>
                            <table class="table table-striped">
                                  <thead class="thead-dark">
                                       <tr>
                                          <th> Client id</th>
                                          <th> Client Name</th>
                                          <th> Date</th>
                                          <th> Type Of Legal Issue</th>
                                          <th> Time</th>
                                       </tr>
                                  </thead>
                                  <tbody>
                                       <tr>
                                          <td>1</td>
                                          <td>Jawhar</td>
                                          <td>23th of august</td>
                                          <td>criminal law issue</td>
                                          <td>2.00pm</td>
                                        
                                       </tr>
                                       <tr>
                                       <td></td><td></td>
                                       <td>
                                             <a href="#" class="btn btn-secondary btn-sm">
                                             <i class="fas fa-angle-double-right"></i> Details
                                             </a>
                                          </td>
                                       </td>
                                       </tr>
                                  </tbody>
                            </table>

                          



                      </div>
                 </div>



                 <div class="col-md-3 mt-5">
                     

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
  </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>