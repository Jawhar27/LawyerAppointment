<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
   <style>
        .navbar .navbar-brand{
            color:aqua;
        }
    
        .navbar .nav-link{
              font-size:14px;
              text-transform:uppercase;
              padding-left:1rem !important;
              padding-right:1rem;
        }
        .navbar .nav-item.active{
            border-left:#444 3px solid;
        }
        .carousel-item{
            height:450px;

        }
        .carousel-image-1{
            background-image: url("img/back.jpg");
       background-repeat:no-repeat;
       background-size:cover;
       background-attachment:fixed;
        }
        .carousel-image-2{
            background-image: url("img/back.jpg");
       background-repeat:no-repeat;
       background-size:cover;
       background-attachment:fixed;
        }
        #showcase .dark-overlay{
       /* position:absolute; */
       top: 0;
       left: 0;
       width:100%;
       min-height:300px;
       background-color:rgba(0,0,0,0.7);
        }
        #home-heading{
            position:relative;
            min-height:100px;
            background:url('img/lawyer.jpg');
            background-size:cover;
            background-repeat:no-repeat;
            text-align:center;
            color:#fff;
        }
        .dart-overlay{
            /* position:absolute; */
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0, 0, 0, 0.7);
            
        }
        #video-play{
            position:relative;
            min-height:200px;
            background:url('img/lawyer-explore.jpg');
            background-size:cover;
            background-repeat:no-repeat;
            background-position: 0 -300px;
            text-align:center;
            color:#333;

        }
        #video-play a{
            color:#333;
        }
        /* .carousel-image-3{
            background-image:url("img/lawyer.jpg");
            background-size:cover;
        } */
      
   </style>

  </head>
  <body>
    
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <div class="container">
              <a href="/" class="navbar-brand">Law Matters</a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                   <span class="navbar-toggler-icon"></span>
              
              </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                   <ul class="navbar-nav ml-auto">
                         <li class="nav-item active">
                            <a href="#" class="nav-link">HOME</a>
                         </li>
                         <li class="nav-item ">
                            <a href="/aboutus" class="nav-link">ABOUT US</a>
                         </li>
                         <li class="nav-item">
                            <a href="/legalIssues" class="nav-link">LEGAL ISSUES</a>
                         </li>
                         <!-- <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                         </li> -->
                         <!-- <li class="nav-item">
                            <a href="/register" class="nav-link">REGISTER</a>
                         </li> -->
                         <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" data-target="navbarDropdown"  data-toggle="dropdown" >
         REGISTER
        </a>
        <div class="dropdown-menu bg-dark " id="navbarDropdown">
          <a class="dropdown-item text-success" href="/register">Register as a client</a>
          <a class="dropdown-item text-success" href="/registerLawyer">Register as a lawyer</a>
       
        </div>
      </li>
                   </ul>
                </div>
                   
          </div>
      </nav>
  
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

                         <!-- registration alert -->
      <p class=" msg text-light  bg-danger rounded ">{{ session('msg')}} </p>

                     <div class="container">
                        <div class="carousel-caption  d-sm-block  mb-5">
                           <h1 class="display-3">Client</h1>
                           <p class="lead">To Make Appointments</p>
                           <a href="/login" class="btn btn-primary btn-lg">Sign Up Now</a>
                        </div>

                     </div>
                  </div>
                  <div class="carousel-item carousel-image-2">
                     <div class="container">
                        <div class="carousel-caption  d-sm-block  mb-5">
                           <h1 class="display-3">Lawyer </h1>
                           <p class="lead"> To View Appointments</p>
                           <a href="{{ route('lawyer.login') }}" class="btn btn-danger btn-lg" >Sign Up Now</a>
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

          
          <!-- Home icon Section-->

        
        <!-- EXPLORE Head -->

        <section id="explore-head-section" class="bg-dark text-white" >
           <div class="container">
               <div class="row">
                      <div class="col text-center py-5">
                         <h1 class="display-4">How it does work</h1>
                         <p class="lead">This is the place for clients to get lawyer appointments to solve their legal issues and also lawyer can manage and maintain client appointments via login to their accounts..! </p>
                         <a href="/aboutus" class="btn btn-outline-success">Find Out More</a>
                      </div>
               </div>
           </div>


        </section>
       

       <!-- video for what we want to do -->
        <section id="video-play">
         <div class="dark-overlay">
            <div class="container">
               <div class="row">
                    <div class="col">
                         <div class="container p-5">
                             <a href="#" class="video" data-video="https://www.youtube.com/embed/vIKO3KppvxQ" data-toggle="modal" data-target="#videoModal">
                             
                               <i class="fas fa-play fa-3x"></i>

                             </a>
                             <h1>See What We Do</h1>
                         </div>
                    </div>
               </div>
               </div>
         </div>
    </section>

    

    
    <!-- what we can do inside -->


    <section id="home-icons" class="py-5">
             <div class="container">
          
                <div class="row">
                            <div class="col-md-3 mb-3 text-center">
                                <i class="fas fa-search fa-3x mb-2"></i>
                                <h3>Find Lawyer </h3>
                                <p>see nearby lawyer's real-time availability</p>
                            </div>
                            <div class="col-md-3 mb-3 text-center">
                            <i class="fas fa-comment-alt fa-3x mb-2"></i>
                                <h3>Review</h3>
                                <p> Read verified reviews from real clients</p>
                            </div>
                            <div class="col-md-3 mb-3 text-center">
                            <i class="fas fa-bug fa-3x mb-2"></i>
                                <h3>Legal Issues</h3>
                                <p> Find the right lawyer for your legal needs</p>
                            </div>
                            <div class="col-md-3 mb-3 text-center">
                            <i class="fas fa-tasks fa-3x mb-2"></i>
                                <h3>Appointments</h3>
                                <p> book instantly & choose the best time for you</p>
                            </div>
                </div>
             </div>
        </section>

        
       


        <!-- Home heading Section -->

<!-- 
        <section id="home-heading" class="p-5">
            <div class="dark-overlay">
                <div class="row">
                       <div class="col">
                              <div class="container pt-5">
                                   <h1> Are You Ready To Get Started</h1>
                                   <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dicta accusantium magnam fuga sint pariatur, explicabo ipsam ad fugiat dolorem!</p>
                              </div>
                       </div>
                </div>
            </div>
        </section> -->


        <section id="explore-head-section" class="bg-dark text-light" >
           <div class="container">
               <div class="row">
                      <div class="col text-center py-5">
                         <h1 class="display-4">When to find a Lawyer?</h1>
                         <p class="lead">You will need to find a lawyer for important life events..! </p>
                         <a href="/legalIssues" class="btn btn-outline-success">Find Out More</a>
                      </div>
               </div>
           </div>


        </section>

              <!-- legal issues-->

      <section id="icon-boxes" class="p-5">
           <div class="container">
               <div class="row mb-4">
                      <div class="col-md-6">
                         <div class="card  text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3>Civil Law Matters</h3>
                                <p>  Civil law deals with behavior that constitutes an injury to an individual or other private party, such as a corporation.</p>
                                  <br><br><a href="/legalIssues" class="btn btn-secondary">more..</a>
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-6">
                                <div class="card   text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>
                                            <h3>Criminal Law Matters</h3>
                                          <p>  It can also involve international relations and multiple jurisdictional rules, particularly concerning issues such as extradition, money-laundering, cross-border crimes and terrorism.</p>
                                            <br><a href="/legalIssues" class="btn btn-secondary">more..</a>
                                        </div>
                                    </div>
                                </div>
                    
               </div>


               <div class="row mb-4">
                      <div class="col-md-6">
                         <div class="card  text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3>Fundamental Right Law Matters </h3>
                                 <p>Fundamental rights are the basic human rights enshrined in the Constitution of Srilanka which are guaranteed to all citizens. They are applied without discrimination on the basis of race, religion, gender, etc</p>
                                  <br><br><a href="/legalIssues" class="btn btn-secondary">more..</a>
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-6">
                                <div class="card  text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>
                                            <h3>Commercial Law Matters</h3>
                                          <p>Commercial law, also known as mercantile law or trade law, is the body of law that applies to the rights, relations, and conduct of persons and businesses engaged in commerce, merchandising, trade, and sale</p>
                                           <br><br><a href="/legalIssues" class="btn btn-secondary">more..</a>
                                        </div>
                                    </div>
                                </div>
                    
               </div>
           </div>
      </section>


    <!-- Info Sectiion


    <section id="info" class="py-5">
           <div class="container">
                <div class="row">
                     <div class="col-md-6 align-self-center">
                         <h3>Heading 1</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore dolor, possimus amet similique commodi suscipit sint placeat quidem asperiores? Nisi!</p>
                         <a href="#" class="btn btn-outline-danger btn-lg">Learn More</a>
                     </div>
                     <div class="col-md-6">
                         
                         <img src="img/client.png" alt="" class="img-fluid">
                     </div>
                </div>
           </div>
    </section> -->


    <!-- Video playing section -->
    
    <!-- <section id="video-play">
         <div class="dark-overlay">
            <div class="container">
               <div class="row">
                    <div class="col">
                         <div class="container p-5">
                             <a href="#" class="video" data-video="https://www.youtube.com/embed/vIKO3KppvxQ" data-toggle="modal" data-target="#videoModal">
                             
                               <i class="fas fa-play fa-3x"></i>

                             </a>
                             <h1>See What We Do</h1>
                         </div>
                    </div>
               </div>
               </div>
         </div>
    </section> -->


<!-- famous lawyers -->

<section id="famousLawyer-head-section" class="bg-dark text-white" >
           <div class="container">
               <div class="row">
                      <div class="col text-center py-5">
                         <h1 class="display-4">Find Lawyers </h1>
                         <p class="lead">Find and know about famous lawyers in our country! </p>
                         <a href="/aboutus" class="btn btn-outline-success">Find Out More</a>
                      </div>
               </div>
           </div>


        </section>




<!-- freequently asked question -->
    <section id="faq" class="p-5 bg-light dark">
              <div class="container">
                 <h1 class="text-center">Frequently Asked Questions</h1>
                 <hr>
                    <div class="row">
                          <div class="col-md-6">
                                            <div id="accordion">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0">
                                                                            <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                                                                            What are the main types of laws?
                                                                            </a>
                                                                    </h5>
                                                                </div>

                                                                    <div id="collapseOne" class="collapse">
                                                                        <div class="card-body">
                                                                            Business Law<br>
                                                                            Property and Conveyancing<br>
                                                                            Criminal Law<br>
                                                                            Debt Recovery and Litigation<br>
                                                                            Family Law<br>
                                                                            Traffic Law<br>
                                                                            Will & Estates
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                            </div>
                                            <div id="accordion">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0">
                                                                            <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">
                                                                                what are Signs of a Good lawyer?
                                                                            </a>
                                                                    </h5>
                                                                </div>

                                                                    <div id="collapseTwo" class="collapse">
                                                                        <div class="card-body">
                                                                       1.Cautiously Optimistic. Most cases aren't slam-dunks, and it is important that your lawyer doesn't make promises regarding the outcome of your case and should not be overconfident no matter how seasoned he or she is <br>
                                                                       2.Great Listener <br>
                                                                       3.Objective <br>
                                                                       4.Honest About Fees Upfront <br>
                                                                       5.Trust Your Gut<br>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                            </div>
                                            <div id="accordion">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0">
                                                                            <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion">
                                                                           what are the legal issues?
                                                                            </a>
                                                                    </h5>
                                                                </div>

                                                                    <div id="collapseThree" class="collapse">
                                                                        <div class="card-body">
                                                                        Legal issue or issue of law is a legal question which is the foundation of a case. It requires a court's decision. It can also refer to a point on which the evidence is undisputed, the outcome of which depends on the court's interpretation of the law
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                            </div>
                          </div>


                          <div class="col-md-6">

                          <div id="accordion">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0">
                                                                            <a href="#collapseFour" data-toggle="collapse" data-parent="#accordion">
                                                                            What type of lawyer gets paid the most? 
                                                                            </a>
                                                                    </h5>
                                                                </div>

                                                                    <div id="collapseFour" class="collapse">
                                                                        <div class="card-body">
                                                                        1.Immigration Lawyer.<br>
                                                                        2.Civil Rights Lawyer.<br>
                                                                        3.Family and Divorce Lawyers.<br>
                                                                        4.Personal Injury.<br>
                                                                        5.Criminal Defense Lawyers.<br>
                                                                        6.Corporate Lawyers.<br>
                                                                        7.Bankruptcy Lawyers.<br>
                                                                        8.Real Estate Lawyers.<br>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                            </div>
                                            <div id="accordion">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0">
                                                                            <a href="#collapseFive" data-toggle="collapse" data-parent="#accordion">
                                                                            How do I ask my lawyer about my case?
                                                                            </a>
                                                                    </h5>
                                                                </div>

                                                                    <div id="collapseFive" class="collapse">
                                                                        <div class="card-body">
                                                                                1.Get organized. Try to create a clear, comprehensive story of your situation.<br>
                                                                                2.Be detailed. Seemingly frivolous details like the weather may, at first, seem dismissible.<br>
                                                                                3.Be honest. Plain and simple: Don't lie.<br>
                                                                                4.Ask to clarify.<br>
                                                                                5.Keep them informed.<br>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                            </div>
                                            <div id="accordion">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0">
                                                                            <a href="#collapseSix" data-toggle="collapse" data-parent="#accordion">
                                                                            When should you get a lawyer?
                                                                            </a>
                                                                    </h5>
                                                                </div>

                                                                    <div id="collapseSix" class="collapse">
                                                                        <div class="card-body">
                                                                        There are many types of legal issues that might require a lawyer's help. You may consider hiring a lawyer if you have suffered an injury, been wrongfully terminated at work, are thinking about starting a business, or have been accused of committing a crime.
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                            </div>
                          </div>
                    </div>
              </div>
         </section>









    <!-- Photo Gallery -->

    <section id="explore-head-section" class="bg-dark text-white" >
           <div class="container">
               <div class="row">
                      <div class="col text-center py-5">
                         <h1 class="display-4">Photo Gallery</h1>
                         <p class="lead">Checkout law related photos</p>
                        
                      </div>
               </div>
           </div>
           </section>

    <section id="gallery" class="py-5">
        <div class="container">
             <!-- <h1 class="text-center">Photo Gallery</h1>
             <p class="text-center">Checkout law related photos</p> -->
             <div class="row mb-4">
                 <div class="col-md-4">
                     <a href="https://source.unsplash.com/random/?legal/560x560" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
                        <img src="https://source.unsplash.com/random/?legal/560x560" alt="" class="img-fluid" >
                        </a>
                 </div>
                 <div class="col-md-4">
                     <a href="https://source.unsplash.com/random/?legal/561x561" data-toggle="lightbox" data-gallery="img-gallery" data-height="561" data-width="561">
                        <img src="https://source.unsplash.com/random/?legal/561x561" alt="" class="img-fluid"  >
                        </a>
                 </div>
                 <div class="col-md-4">
                     <a href="https://source.unsplash.com/random/?legal/562x562" data-toggle="lightbox" data-gallery="img-gallery" data-height="562" data-width="562">
                        <img src="https://source.unsplash.com/random/?legal/562x562" alt="" class="img-fluid" >
                        </a>
                 </div>
             </div>
             <div class="row mb-4">
                 <div class="col-md-4">
                     <a href="https://source.unsplash.com/random/?legal/563x563" data-toggle="lightbox" data-gallery="img-gallery" data-height="563" data-width="563">
                        <img src="https://source.unsplash.com/random/?legal/563x563" alt="" class="img-fluid"  >
                        </a>
                 </div>
                 <div class="col-md-4">
                     <a href="https://source.unsplash.com/random/?legal/564x564" data-toggle="lightbox" data-gallery="img-gallery" data-height="564" data-width="564">
                        <img src="https://source.unsplash.com/random/?legal/564x564" alt="" class="img-fluid"  >
                        </a>
                 </div>
                 <div class="col-md-4">
                     <a href="https://source.unsplash.com/random/?legal/565x565" data-toggle="lightbox" data-gallery="img-gallery" data-height="565" data-width="565">
                        <img src="https://source.unsplash.com/random/?legal/565x565" alt="" class="img-fluid"  >
                        </a>
                 </div>
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
                         <button class="btn btn-primary">Contact Us</button>
                    </div>
                </div>
            </div>
        </section>


     <!-- Client login Modal -->
   <!--  <div class="modal fade text-dark" id="loginClientModal">
                <div class="modal-dialog">
                     <div class="modal-content">
                          <div class="modal-header bg-dark text-white">
                                 <h5 class="modal-title">Client Login</h5>
                                     <button class="close" data-dismiss="modal">
                                     <span>&times;</span>
                                     </button>
                                
                          </div>
                          <div class="modal-body">
                                                <form action="/admin" id="loginForm">
                                                <h2 class="text-center">Please login</h2>       
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Username" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password" required="required">
                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
                                                                <button type="submit" class="btn btn-primary pull-right">Log in</button>
                                                            </div>
                                                            <div class="clearfix">
                                                                <a href="#" class="btn btn-danger">Forgot Password?</a>
                                                                <a href="#" class="btn btn-success">Create an Account</a>
                                                            </div>  
                                                </form>
                          </div>
                     </div>
                </div>
          </div> -->
           

   <!-- lawyer login modal -->
   
   <!-- <div class="modal fade text-dark" id="loginLawyerModal">
                <div class="modal-dialog">
                     <div class="modal-content">
                          <div class="modal-header bg-dark text-white">
                                 <h5 class="modal-title">Lawyer Login</h5>
                                     <button class="close" data-dismiss="modal">
                                     <span>&times;</span>
                                     </button>
                                
                          </div>
                          <div class="modal-body">
                                                <form action="/lawyer" id="loginForm">
                                                <h2 class="text-center">Please login</h2>       
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Username" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password" required="required">
                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
                                                                <button type="submit" class="btn btn-primary pull-right">Log in</button>
                                                            </div>
                                                            <div class="clearfix">
                                                                <a href="#" class="btn btn-danger">Forgot Password?</a>
                                                                <a href="#" class="btn btn-success">Create an Account</a>
                                                            </div>  
                                                </form>
                          </div>
                     </div>
                </div>
          </div>
            -->


    <!-- Video Modal -->
  
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body bg-dark">
          <h1 class="display-6 text-white"> Lawyers and clients</h1>
          <button  type="button" class="close bg-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous"></script>
  <script>

$('#year').text(new Date().getFullYear());

     //carousel sliding
       $('.carousel').carousel({
          interval:6000,
          pause:'hover'
       });


       //lightbox init
       $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });


       //video modal

       $(function() {
    $(".video").click(function () {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });
  });
  </script>
  
  </body>

</html>