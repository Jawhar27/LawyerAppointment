<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <style>
  body{
    background:url('img/clientback.jpg');
    background-size:cover;
    background-attachment:fixed;

  }
  .navbar .nav-link{
              font-size:14px;
              text-transform:uppercase;
              padding-left:1rem !important;
              padding-right:1rem;
        }
        .navbar .navbar-brand{
            color:aqua;
        }
        .navbar .nav-item.active{
            border-left:#444 3px solid;
        }
  h1{
     font-size:40px;
     color:white;
     margin-top:250px;

  }
  p{
      font-size:17px;
      color:white;
  }
  .fas{
    font-size:35px;
    color:white;
    float:right;
    margin-top:20px;
  }
  h3{
      font-size:25px;
      color:white;
      margin-top:20px;
  }
  .col-md-5{
    margin-top:80px;
    box-shadow:-1px 1px 60px 10px black;
    background:rgba(0,0,0,0.4);

  }
  .label{
    font-weight:normal;
    margin-top:15px;
    color:white;
    font-size:19px;
  }
  .form-control{
    background:transparent;
    border-radius:0px;
    border:0px;
    border-bottom:1px solid white;
    font-size:18px;
    margin-top:15px;
    margin-left:20px;
    height:40px;
    color:white;

  }
  input[type="checkbox"]{
    margin-top:15px;
    width:15px;
    height:15px;
    margin-left:20px;
  }
  small{
    font-size:15px;
    color:white;
  }
  input[type="radio"]{
    margin-top:24px;
    margin-left:20px;
  }
  option{
    color:gray;
  }


  .btn-info ,.btn-warning{
    margin-top:20px;
    font-size:18px;
    width:120px;
    margin-left:80px;
    margin-bottom:20px;
  }

    </style>
  </head>
  <body>
           
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <div class="container">
              <a href="/lawHome" class="navbar-brand">Law Matters</a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                   <span class="navbar-toggler-icon"></span>
              
              </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                   <ul class="navbar-nav ml-auto">
                         <li class="nav-item ">
                            <a href="/" class="nav-link">HOME</a>
                         </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link">ABOUT US</a>
                         </li>
                         <li class="nav-item">
                            <a href="/legalIssues" class="nav-link">LEGAL ISSUES</a>
                         </li>
                         <!-- <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                         </li> -->
                         <li class="nav-item active dropdown ">
        <a class="nav-link dropdown-toggle" href="#" data-target="navbarDropdown"  data-toggle="dropdown" >
         REGISTER
        </a>
        <div class="dropdown-menu bg-dark " id="navbarDropdown">
          <a class="dropdown-item text-success" href="/registerClient">Register as a client</a>
          <a class="dropdown-item text-success" href="/registerLawyer">Register as a lawyer</a>
       
        </div>
      </li>
                   </ul>
                </div>
                   
          </div>
      </nav>

    

     





      <div class="container">
          <div class="row">
               <div class="col-md-7">
               <h1 class="text-left">Why We Need To Register <br>As a Client?</h1>
               <h3 class=" text-success text-center ">To Meet The Lawyers..</h3><br>
               <p class="text-left">clients are the people who are have legal issues or need a legal advices in their daily routine.As a solution they want to meet an attroney,when we register as a client we can see the availability of lawyer in our country.we can search for the lawyers,search lawyers based on our legal isssues and we can make an appointment with the lawyer through this registration.</p>
               </div>

               <div class="col-md-5">
                       <div class="row">
                              <div class="col-md-6">
                                  <h3 class="text-left">Registration</h>
                              </div>
                              <div class="col-md-6">
                              <i class="fas fa-pencil-alt "></i>
                              </div>
                              
                       </div>
                       <hr>
                       <form>
                       <div class="row mt-2">
                           <label  class="label col-md-2 control-label">Name</label>
                           <div class="col-md-10">
                           <input type="text" class="form-control" name="name" placeholder="Name">
                           
                           </div>
                       </div>

                       <div class="row mt-2">
                           <label  class="label col-md-2 control-label">Email</label>
                           <div class="col-md-10">
                           <input type="email" class="form-control" name="email" placeholder="E-mail">
                           </div>
                       </div>

                       <div class="row mt-2">
                           <label  class="label col-md-2 control-label">Lawyer_ID</label>
                           <div class="col-md-10">
                           <input type="text" class="form-control" name="lawyer_id" placeholder="Lawyer ID">
                           </div>
                       </div>
                     
                       <div class="row mt-2">
                           <label  class="label col-md-2 control-label">Description</label>
                           <div class="col-md-10">
                           <textarea  class="form-control" placeholder="small description about yourself"></textarea>
                           </div>
                       </div> -->

                       <div class="row mt-2">
                            <label  class="label col-md-2 control-label">Gender</label>
                            <div class="col-md-10">
                                <input type="radio" name="gender" value="male"><small>Male</small><br>
                                <input type="radio" name="gender" value="female"><small>Female</small>

                            </div>
                       </div>

                        <div class="row mt-2">
                           <label class="label col-md-2 control-label">District</label>
                           <div class="col-md-10">
                                <select class="form-control">
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>Badulla</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>

                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>

                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>

                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>

                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                     <option>nuwara-eliya</option>
                                </select>
                           </div>
                       </div>
                       <div class="row mt-2">
                           <label  class="label col-md-2 control-label">Password</label>
                           <div class="col-md-10">
                           <input type="password" class="form-control" name="password" placeholder="Password">
                           
                           </div>
                       </div>
                       <div class="row mt-2">
                           <label  class="label col-md-2 control-label">Confirm Password</label>
                           <div class="col-md-10">
                           <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
                           <input type="checkbox"><small> Remember me</small>
                           </div>
                       </div>

                       <a href="#" class="btn btn-info">Submit</a>
                       <a href="#" class="btn btn-warning">Cancel</a>
                 </form>

               </div>
          </div>
      </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>