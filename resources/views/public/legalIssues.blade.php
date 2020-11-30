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

       #page-header{
        height:200px;
        background:url('img/lawyer.jpg');
       background-size:cover;
        background-attachment:fixed;
        color:#fff;
        border-bottom:1px #eee solid;
        padding-top:50px;
        background-repeat:no-repeat;

    }
    #faq .card{
        border:#444;
    }
    #faq a{
        color:#fff;
        text-decoration:none;
    }
    #faq .card-body,
    #faq .card-header{
      background:#333;
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
                         <li class="nav-item ">
                            <a href="/aboutus" class="nav-link">ABOUT US</a>
                         </li>
                         <li class="nav-item active">
                            <a href="#" class="nav-link">LEGAL ISSUES</a>
                         </li>
                         <!-- <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                         </li> -->
                         <li class="nav-item dropdown ">
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

          <!-- PAGE HEADER -->
     
     <header id="page-header">
           <div class="container">
                 <div class="row">
                    <div class="col-md-6 m-auto text-center">
                          <h1> CATEGORIES OF LAW</h1>
                          <p class="mt-2">Learn About the Law features informational articles about a wide variety of legal topics</p>



                    </div>
                 </div>
           </div>
     </header>


         <!-- legal issues SECTION -->

       <!-- legal issues SECTION -->
       <div class="text-center m-5">
   <div class="container">
          <h2>About Law</h2>
        <p class="lead">The law is the system of rules and regulations by which society functions efficiently and harmoniously. The legal system protects the rights and responsibilities of both individuals and groups, and ensures social and economic interactions are conducted smoothly and peacefully. Essentially, laws serve as the primary mediator of relations between people.

<br><br>Every state and country has its own legal system.  There are many different branches of law including corporate law, property and taxation law through to media, environmental health and international law. All types of law have far-reaching effects and help to shape politics, economics and society in numerous ways.</p>
   </div>
   </div>


    <!-- modal for civil video -->

    <div class="modal fade" id="videoModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body bg-dark">
          <h1 class="display-6 text-white"> Law Matters</h1>
          <button  type="button" class="close bg-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

<!-- civil law -->
         <section id="civil-head-section" class="bg-dark text-white" >
           <div class="container">
               <div class="row">
                      <div class="col text-center py-5">
                         <h1 class="display-4">Civil Law Matters</h1>
                         <p class="lead">Checkout civil law related issues </p>
                        
                      </div>
               </div>
           </div>


           </section>


           
         <!-- video for civil -->
               <!-- video for what we want to do -->
        <section id="video-play">
         <div class="dark-overlay">
            <div class="container">
               <div class="row">
                    <div class="col">
                         <div class="container p-5">
                             <a href="#" class="video1" data-video="https://www.youtube.com/embed/DHgro596GiY" data-toggle="modal" data-target="#videoModal1">
                             
                               <i class="fas fa-play fa-3x"></i>

                             </a>
                             <h1>See what are the Civil related issues</h1>
                         </div>
                    </div>
               </div>
               </div>
         </div>
    </section>


                 <!-- civil-->

                 <section id="icon-boxes" class="p-5">
           <div class="container">
               <div class="row mb-4">
                      <div class="col-md-6">
                         <div class="card bg-light text-dark text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3>Family Law</h3>
                                   Divorce,
                                   Adaption,
                                   Custady,
                                   Domestic,
                                   Violence.
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-6">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>
                                            <h3>Property Law</h3>
                                            Land disputes,Rental disputes.
                                        </div>
                                    </div>
                                </div>
                    
               </div>


               <div class="row mb-4">
                      <div class="col-md-6">
                         <div class="card bg-light text-dark text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3> Labour Disputes</h3>
                                  Employment contracts, wages and conditions, workplace relations and unfair dismissal
                                  
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-6">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>
                                            <h3>Delicutal Actions</h3>
                                            <br>
                                            Accidents,Medical Negligence.
                                            
                                        </div>
                                    </div>
                                </div>
                     
               </div>
           </div>
      </section>


           <!-- criminal law -->
           <section id="criminal-head-section" class="bg-dark text-white" >
           <div class="container">
               <div class="row">
                      <div class="col text-center py-5">
                         <h1 class="display-4">Criminal Law Matters</h1>
                         <p class="lead">Checkout criminal law related issues </p>
                        
                      </div>
               </div>
           </div>
           </section>

           <!-- criminal law video -->
           <section id="video-play">
         <div class="dark-overlay">
            <div class="container">
               <div class="row">
                    <div class="col">
                         <div class="container p-5">
                             <a href="#" class="video1" data-video="https://www.youtube.com/embed/50dqchEbS4Q" data-toggle="modal" data-target="#videoModal1">
                             
                               <i class="fas fa-play fa-3x"></i>

                             </a>
                             <h1>See what are the Criminal related issues</h1>
                         </div>
                    </div>
               </div>
               </div>
         </div>
    </section>

    
    <!-- modal for criminal video -->

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body bg-dark">
          <h1 class="display-6 text-white"> </h1>
          <button  type="button" class="close bg-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>


               <!-- Criminal BOXES -->

      <section id="icon-boxes" class="p-5">
           <div class="container">
               <div class="row mb-4">
                      <div class="col-md-4">
                         <div class="card bg-light text-dark text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3>Murder</h3>
                                  
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-4">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>
                                            <h3>Rape</h3>
                                            
                                        </div>
                                    </div>
                                </div>
                      <div class="col-md-4">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-comments fa-3x"></i>
                                            <h3>Theft & Robbery</h3>
                                         
                                        </div>
                                    </div>
                      </div>
               </div>


               <div class="row mb-4">
                      <div class="col-md-4">
                         <div class="card bg-light text-dark text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3> Kidnap</h3>
                                  
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-4">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>
                                            <h3>Abetment</h3>
                                            
                                        </div>
                                    </div>
                                </div>
                      <div class="col-md-4">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-comments fa-3x"></i>
                                            <h3>Private Defence</h3>
                                            
                                        </div>
                                    </div>
                      </div>
               </div>
           </div>
      </section>


           <!-- commerrcial -->


           <section id="explore-head-section" class="bg-dark text-white" >
           <div class="container">
               <div class="row">
                      <div class="col text-center py-5">
                         <h1 class="display-4">Commercial Law Matters</h1>
                         <p class="lead">Checkout commercial law related issues </p>
                        
                      </div>
               </div>
           </div>
           </section>

                 <!-- commercial law video -->
                 <section id="video-play">
         <div class="dark-overlay">
            <div class="container">
               <div class="row">
                    <div class="col">
                         <div class="container p-5">
                             <a href="#" class="video1" data-video="https://www.youtube.com/embed/VYy89X_7rIE" data-toggle="modal" data-target="#videoModal1">
                             
                               <i class="fas fa-play fa-3x"></i>

                             </a>
                             <h1>See what are the Commercial related issues</h1>
                         </div>
                    </div>
               </div>
               </div>
         </div>
    </section>

    
    <!-- modal for commercial video -->

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body bg-dark">
          <h1 class="display-6 text-white"> </h1>
          <button  type="button" class="close bg-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

                    <!-- commercial BOXES -->

      <section id="icon-boxes" class="p-5">
           <div class="container">
               <div class="row mb-4">
                      <div class="col-md-4">
                         <div class="card bg-light text-dark text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3>Contract</h3>
                                  <br>
                                  Buying and selling a <br>home or investment property
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-4">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>
                                            <h3>Business</h3>
                                            Starting a business, shareholder agreements, buying and selling a business, franchising and insolvency
                                            
                                        </div>
                                    </div>
                                </div>
                      <div class="col-md-4">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-comments fa-3x"></i>
                                            <h3>Trade</h3>
                                            trade Regulations are laws enacted by Congress and/or by a state to ensure a free and competitive economy.
                                        </div>
                                    </div>
                      </div>
               </div>


               <div class="row mb-4">
                      <div class="col-md-4">
                         <div class="card bg-light text-dark text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3> Copywriting </h3>
                                  the protection of the ownership and usage rights for creative works including works of art and written books, among other types of media.
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-4">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>   
                                            <h3>Cyber Law</h3><br>
                                            Cyber law helps protect users from harm by enabling the investigation and prosecution of online criminal activity.
                                            
                                        
                                        </div>

                                    </div>
                                </div>
                      <!-- <div class="col-md-4">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-comments fa-3x"></i>
                                            <h3>Private Defence</h3>
                                            
                                        </div>
                                    </div>
                      </div> -->
               </div>
           </div>
      </section>




           <!-- fundamental Right -->


           <section id="explore-head-section" class="bg-dark text-white" >
           <div class="container">
               <div class="row">
                      <div class="col text-center py-5">
                         <h1 class="display-4">Fundamental Right Law Matters</h1>
                         <p class="lead">Checkout fundamental right law related issues </p>
                        
                      </div>
               </div>
           </div>
           </section>
                         <!-- fundatamental law video -->
                         <section id="video-play">
         <div class="dark-overlay">
            <div class="container">
               <div class="row">
                    <div class="col">
                         <div class="container p-5">
                             <a href="#" class="video1" data-video="https://www.youtube.com/embed/wN4RgVMs6uw" data-toggle="modal" data-target="#videoModal1">
                             
                               <i class="fas fa-play fa-3x"></i>

                             </a>
                             <h1>See what are the Fundamental Right Law related issues</h1>
                         </div>
                    </div>
               </div>
               </div>
         </div>
    </section>

    
    <!-- modal for fundamental video -->

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body bg-dark">
          <h1 class="display-6 text-white"> </h1>
          <button  type="button" class="close bg-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

           
      <section id="icon-boxes" class="p-5">
           <div class="container">
               <div class="row mb-4">
                      <div class="col-md-6">
                         <div class="card bg-light text-dark text-center">
                             <div class="card-body">
                                  <i class="fas fa-building fa-3x"></i>
                                  <h3>Administrative Action</h3>
                                  An administrative action is a legal action concerning the conduct of a public administrative body.This kind of action can for example lead to the reversal of certain decisions by public bodies or compel an authority to take a certain action.
                             </div>
                         </div>
                        
                      </div>
                      <div class="col-md-6">
                                <div class="card bg-light text-dark text-center">
                                        <div class="card-body">
                                            <i class="fas fa-bullhorn fa-3x"></i>
                                            <h3>Human Rights Violations</h3><br>
                                            Human rights issues included unlawful killings; torture, notably sexual abuse; arbitrary detention by government forces; website blocking; violence
                                        </div>
                                    </div>
                                </div>
                    
               </div>


               
           </div>
      </section>



    


           <!-- FOOTER -->
       
           <section id="main-footer" class="bg-light text-black">
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
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script>

  //civil video
  $(function() {
    $(".video1").click(function () {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });
  });

   //carousel sliding
   $('.carousel').carousel({
          interval:6000,
          pause:'hover'
       });
    //Footer year
    $('#year').text(new Date().getFullYear());
  </script>
  
  </body>
</html>