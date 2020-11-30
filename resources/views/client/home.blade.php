<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <style>

       body {
  margin-top: 105px; }

.navbar {
  /* opacity: 0.9; */

 
  border-bottom:#5F9EA0 2px solid;
   }
   #showcase{
      opacity:0.9;
   }

   .navbar  .navbar-item{
      font-size:1.3rem;
      padding-right:1.4rem;
   }
   #showcase{
      /* position:relative; */
      background-image:url("img/clientback.jpg");
      background-attachment:fixed;
      background-repeat:no-repeat;
       background-size:cover;
       border-bottom:2px #5F9EA0 solid;
   }
   #showcase .dark-overlay{
      /* position:absolute; */
      width:100%;
      height:100%;
      top:0;
      left:0;
   }
   #img1{
     margin-top:80px;
     border:2px solid green;
     height:60%;
     width:70%
   }
  
   #lawyers .img{
      margin-top:-50px;
      height:120px;
   }
  
   #cardLawyer:hover {
  background:#F8F8FF;
  color:black; 
  }

  #main-footer{
     height:100%;
  }
 
  @media(min-width:1199px){
      .port-item{
          padding:4em !important;
      }
      /* #districtLawyers{
         margin-left:100px;
      } */
      /* #searchBar{
         margin-left:120px;
      }
      #search{
         margin-left:120px;
      } */
      
     
  }
  @media(max-width:768px){
     .container h2{
        font-size:4rem;
     }
     #categoryOfLawyer{
      font-size:2rem; 
     }
     #identifyLawyer{
      font-size:2rem;  
     }
    
  }
 

   </style>

  </head>
  <body>
  
           <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-4">
       <div class="container">
              <a href="#home" class="navbar-brand">
                   <img src="img/client.png" width="50" height="50" alt="">
                   <h3 class="d-inline align-middle">Client</h3>
              </a>
              <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </a>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                   <ul class="navbar-nav ml-auto">
                     <li class="navbar-item">
                       <a href="#showcase" class="nav-link" >Home</a>
                    </li>
                    <li class="navbar-item">
                       <a href="#page-header" class="nav-link" >Highly Rated Lawyers</a>
                    </li>
                    <li class="navbar-item">
                       <a href="#profile-header" class="nav-link" >Lawyers In Srilanka</a>
                    </li>
                    <li class="navbar-item">
                       <a href="/clientprofile" class="nav-link" >Profile</a>
                    </li>
                    
                    </ul>
                  </div>
       </div>
    </nav>
    

               <!--Searching Lawyer -->

                <!-- <section id="lawyerSearch" class="bg-light text-white py-5">
                   <div class="container ">
                        <div class="row">
                              <div class="col-md-4">
                                   <input type="text" class="form-control form-control-lg" placeholder="Area of lawyer">
                              </div>
                              <div class="col-md-4">
                                   <input type="text" class="form-control form-control-lg" placeholder="Name of lawyer">
                              </div>
                              <div class="col-md-4">
                                   <a href="#" class="btn btn-light text-dark btn-lg btn-block">
                                   <i class="fas fa-search"></i>  Search
                                   </a>
                              </div>
                        </div>
                   </div>
                </section> -->


                 <!-- SHOWCASE -->
     <section id="showcase"  class="py-5">

                                 <!--Searching Lawyer newly updated into background so we dont want section-->
                                 
                              <!-- <section id="lawyerSearch" class="bg-dark text-white py-5"> -->
                                                <div class="container ">
                                                      <div class="row text-center">
                                                            <!-- <div class="col-md-4">
                                                               <input type="text" class="form-control form-control-lg" placeholder="Select Area">
                                                            </div> -->
                                                            <div class="col-md-8">
                                                               <input id="searchBar" type="text" class="form-control form-control-lg"  placeholder="Search For Lawyers...." >
                                                            </div>
                                                            <div class="col-md-4">
                                                               <a href="#" id="search" class="btn btn-primary btn-lg ">
                                                               <i class="fas fa-search"></i>  Search
                                                               </a>
                                                            </div>
                                                      </div>
                                                </div>
                                             <!-- </section> -->








        <div class="dark-overlay text-white">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 text-center order-1">
                  
                       <h2 class="display-2 mt-3 pt-5">Good morning ! Client</h2>
                   
                       <p class="lead">Do Your Appointments.. </p>
                       <a href="#" class="btn btn-outline-secondary btn-lg text-white" data-toggle="modal" data-target="#readMoreAppointment">
                           <i class="fas fa-arrow-right"></i>  Read More
                       </a>
                  </div>
                   <div class="col-lg-4 order-2">
                   <img href="#" class="img-fluid d-none d-lg-block" id="img1" src="img/cli.jpg">
                   </div>
                   
         </div>
                   
         </div>
        </div>

        </section>

 <!-- modal for read more -->
 <div class="modal fade text-dark" id="readMoreAppointment">
                <div class="modal-dialog">
                     <div class="modal-content">
                          <div class="modal-header bg-light text-dark">
                                 <h5 class="modal-title">How To Make An Appointment?</h5>
                                     <button class="close bg-light" data-dismiss="modal">
                                     <span>&times;</span>
                                     </button>
                                
                          </div>
                          <div class="modal-body">
                         <p> Once you've found a lawyer, you can instantly book online with an available lawyer who has verified client reviews so that you can make an informed choice.

Plus  email and SMS booking confirmation and reminders are all included, so you have your appointment information at your fingertips. </p>           
                          </div>
                     </div>
                </div>
          </div>
      












   

                  <header id="page-header">
                        <div class="text-white bg-dark mt-0">
                            <div class="container">
                              <div class="row">
                                 <div class="col m-auto text-center">
                                       <h1 class="mt-4 mb-3"> <i class="fa fa-star"></i> Meet The High Rated Lawyers</h1>
                                       <p class="lead mb-4">meet the famous lawyer in our country!</p>

                                 </div>
                              </div>
                              </div>
                        </div>
                  </header>

             <!-- Rating lawyers -->
             <section id="lawyers" class="my-5 text-center">
                 <div class="container">
                     <!-- <div class="row">
                                <div class="col">
                                    <div class="info-header mb-5">
                                         <h1 class="text-dark pb-3">
                                            Meet The High Rated Lawyers
                                         </h1>
                                         <p class="lead">meet the famous lawyer in our country!</p>

                                    </div>
                                 </div>
                     </div> -->
                     <div class="row">

                                 <!-- First lawyer-->
                                   <div class="col-lg-3 col-md-6 mt-5">
                                       <div class="card-body" id="cardLawyer">
                                           <img src="img/law1.jpg" alt="" class="img img-fluid rounded-circle w-50 mb-3">
                                            <h3> Susan Williams </h3>
                                            <h5 class="text-muted">Criminal lawyer</h3>
                                            <p>he is from gampaha...</p>
                                            <div class="d-flex justify-content-center">
                                                      <div class="p-4">
                                                         <a href="http://facebook.com">
                                                            <i class="fab fa-facebook"></i>
                                                         </a>
                                                      </div>
                                                      <div class="p-4">
                                                            <a href="http://twitter.com">
                                                            <i class="fab fa-twitter"></i>
                                                               </a>
                                                      </div>
                                                      <div class="p-4">
                                                         <a href="http://instagram.com">
                                                         <i class="fab fa-instagram"></i>
                                                         </a>
                                                      </div>
                                            </div>
                                            <div class="p-4">
                                            <a href="#" class="btn btn-success">
                                                         <i class="fab fa-instagram"> Make Appointment</i>
                                                         </a>
                                                      </div>

                                           
                                       </div>
                                   </div>
                                    <!-- second Lawyer-->
                                    <div class="col-lg-3 col-md-6 mt-5">
                                       <div class="card-body" id="cardLawyer">
                                           <img  src="img/law2.jpg" alt="" class="img img-fluid rounded-circle w-50 mb-3">
                                            <h3> kasun Williams </h3>
                                            <h5 class="text-muted">civil lawyer</h3>
                                            <p>he is from gampaha...</p>
                                            <div class="d-flex justify-content-center">
                                                      <div class="p-4">
                                                         <a href="http://facebook.com">
                                                            <i class="fab fa-facebook"></i>
                                                         </a>
                                                      </div>
                                                      <div class="p-4">
                                                            <a href="http://twitter.com">
                                                            <i class="fab fa-twitter"></i>
                                                               </a>
                                                      </div>
                                                      <div class="p-4">
                                                         <a href="http://instagram.com">
                                                         <i class="fab fa-instagram"></i>
                                                         </a>
                                                      </div>
                                            </div>
                                            <div class="p-4">
                                            <a href="#" class="btn btn-success">
                                                         <i class="fab fa-instagram"> Make Appointment</i>
                                                         </a>
                                                      </div>

                                           
                                       </div>
                                   </div>
                                   <!-- third lawyer -->

                                   <div class="col-lg-3 col-md-6 mt-5">
                                       <div class="card-body" id="cardLawyer">
                                           <img src="img/law3.jpg" alt="" class="img img-fluid rounded-circle w-50 mb-3">
                                            <h3> Susan Williams </h3>
                                            <h5 class="text-muted">Criminal lawyer</h3>
                                            <p>he is from gampaha...</p>
                                            <div class="d-flex justify-content-center">
                                                      <div class="p-4">
                                                         <a href="http://facebook.com">
                                                            <i class="fab fa-facebook"></i>
                                                         </a>
                                                      </div>
                                                      <div class="p-4">
                                                            <a href="http://twitter.com">
                                                            <i class="fab fa-twitter"></i>
                                                               </a>
                                                      </div>
                                                      <div class="p-4">
                                                         <a href="http://instagram.com">
                                                         <i class="fab fa-instagram"></i>
                                                         </a>
                                                      </div>
                                            </div>
                                            <div class="p-4">
                                            <a href="#" class="btn btn-success">
                                                         <i class="fab fa-instagram"> Make Appointment</i>
                                                         </a>
                                                      </div>

                                           
                                       </div>
                                   </div>

                                   <!-- fourth lawyer -->
                                   <div class="col-lg-3 col-md-6 mt-5">
                                       <div class="card-body" id="cardLawyer">
                                           <img src="img/law4.jpg" alt="" class="img img-fluid rounded-circle w-50 mb-3">
                                            <h3> Susan Williams </h3>
                                            <h5 class="text-muted">Criminal lawyer</h3>
                                            <p>he is from gampaha...</p>
                                            <div class="d-flex justify-content-center">
                                                      <div class="p-4">
                                                         <a href="http://facebook.com">
                                                            <i class="fab fa-facebook"></i>
                                                         </a>
                                                      </div>
                                                      <div class="p-4">
                                                            <a href="http://twitter.com">
                                                            <i class="fab fa-twitter"></i>
                                                               </a>
                                                      </div>
                                                      <div class="p-4">
                                                         <a href="http://instagram.com">
                                                         <i class="fab fa-instagram"></i>
                                                         </a>
                                                      </div>
                                                      
                                                    
                                            </div>
                                            <div class="p-4">
                                            <a href="#" class="btn btn-success">
                                                         <i class="fab fa-instagram"> Make Appointment</i>
                                                         </a>
                                                      </div>
                                           
                                       </div>
                                   </div>
                              
                     </div>
                     <br>
                     <div class="row">
                                <div class="col">
                                <a href="#" class="btn btn-outline-secondary  text-blue">
                                      <i class="fas fa-arrow-right"></i> For More Rated Lawyers..
                                  </a>
                                 </div>
                     </div>
                 </div>
             </section>



             
             <header id="profile-header">
                        <div class="text-white bg-dark mt-0">
                            <div class="container">
                              <div class="row">
                                 <div class="col m-auto text-center">
                                       <h1 class="mt-4 mb-3"> <i class="fa fa-gavel"></i> Srilankan Lawyers</h1>
                                       <p class="lead mb-4">Ensure lawyer details and make appointments!</p>

                                 </div>
                              </div>
                              </div>
                        </div>
                  </header>

                  <!-- popular types of law -->

                        <!-- Showcase Slider-->

      <section id="showcase">
      <div class="dark-overlay">
         <div id="mycarousel" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#mycarousel"> </li>
                <li  data-slide-to="1" data-target="#mycarousel"> </li>
                <!-- <li  data-slide-to="2" data-target="#mycarousel"> </li> -->
               
             </ol>
             <div class="carousel-inner">
                  <div class="carousel-item carousel-image-1 active">
                     <div class="container">
                        <div class="carousel-caption  d-sm-block  mb-5">
                           <h1 class="display-3">Client</h1>
                           <p class="lead">To Make Appointments</p>
                           <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginClientModal">Sign Up Now</a>
                        </div>

                     </div>
                  </div>
                  <div class="carousel-item carousel-image-2">
                     <div class="container">
                        <div class="carousel-caption  d-sm-block  mb-5">
                           <h1 class="display-3">Lawyer </h1>
                           <p class="lead"> To View Appointments</p>
                           <a href="#" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#loginLawyerModal">Sign Up Now</a>
                        </div>

                     </div>
                  </div>
               
             </div>

             <a href="#mycarousel" data-slide="prev" class="carousel-control-prev">
             <span class="carousel-control-prev-icon"></span>
             </a>
             <a href="#mycarousel" data-slide="next" class="carousel-control-next">
             <span class="carousel-control-next-icon"></span>
             </a>
             
         </div>
         </div>
      </section>


              <!-- Profile Section -->
              <section id="srilankaLawyers" class="my-5 text-center">
                 <div class="container">
                     <!-- <div class="row">
                                <div class="col">
                                    <div class="info-header mb-5">
                                         <h1 class="text-dark pb-3 ">
                                            Srilankan Lawyers
                                         </h1>
                                         <p class="lead">Ensure lawyer details and make appointments!</p>

                                    </div>
                                 </div>
                     </div> -->
                     <h2 class="text-center mb-4" id="categoryOfLawyer">Types of lawyers</h2>
                     <div class="row">
                            
                          <div class="col-md-3">
                             <a href="#" class="btn btn-dark text-light w-100 m-2">Civil Lawyers</a>
                          </div>
                          <div class="col-md-3">
                             <a href="#" class="btn btn-dark text-light w-100 m-2">Criminal Lawyers</a>
                          </div>
                          <div class="col-md-3">
                             <a href="#" class="btn btn-dark text-light w-100 m-2">Commercial Lawyers</a>
                          </div>
                          <div class="col-md-3">
                             <a href="#" class="btn btn-dark text-light w-100 m-2"> Fundamental Right Lawyers</a>
                          </div>
                     </div>

                     <h2 class="mt-5 text-center" id="identifyLawyer">Identify Lawyers by Districts</h2>
                     <div id="districtLawyers" class="row">
                     <div class="col-lg col-md-4 p-4">
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Jaffna</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Kilinochchi</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Mullaitivu</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Mannar</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Vavuniya</a>
                     </div>
                  
                     <div class="col-lg col-md-4 p-4">
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Trincomalee</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Polonnaruwa</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Batticalo</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2 ">Ampara</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Moneragala</a>
                     </div>
                     <div class="col-lg col-md-4 p-4">
                     <a href="#" class="btn btn-light text-dark w-100  m-2">Anuradhapura</a>
                           <a href="#" class="btn btn-light text-dark w-100 m-2">Puttalam</a>
                           <a href="#" class="btn btn-light text-dark w-100 m-2">Kurunegala</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Matale</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Gampaha</a>
                     </div>
                     <div class="col-lg col-md-4 p-4">
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Kandy</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Kegalle</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Badulla</a>
                           <a href="#" class="btn btn-light text-dark w-100 m-2">Nuwara-Eliya</a>
                           <a href="#" class="btn btn-light text-dark w-100  m-2">Ratnapura</a>
                     </div>
                     <div class="col-lg col-md-4 p-4">
                     <a href="#" class="btn btn-light text-dark w-100 m-2">Colombo</a>
                           <a href="#" class="btn btn-light text-dark w-100 m-2">Kalutara</a>
                           <a href="#" class="btn btn-light text-dark w-100 m-2">Galle</a>
                           <a href="#" class="btn btn-light text-dark w-100 m-2">Matara</a>
                           <a href="#" class="btn btn-light text-dark w-100 m-2">Hambantota</a>
                     </div>
                     </div>
               </section>

        <!-- FOOTER -->
       
        <section id="main-footer" class="bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col text-center py-4">
                         <h4>Lawyer</h4>
                         <p> Copyright &copy; <span id="year"></span></p>
                         <a href="#" class="btn btn-dark">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>






















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 


    <script>

     //carousel sliding
     $('.carousel').carousel({
          interval:6000,
          pause:'hover'
       });

  $('#year').text(new Date().getFullYear());

//   //init scroll spy
//   $('body').scrollspy({target: '#main-nav'});

  </script>
  </body>
</html>