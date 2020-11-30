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
   #profImg{
     height:60%x;
     width:60%;
   }
   </style>
  </head>
  <body>


    <!-- Neliya Head -->

    <section id="neliya-head-section" class="bg-dark text-white" >
           <div class="container">
               <div class="row">
                      <div class="col-md-10 text-center py-5">
                         <h1 class="display-4">Lawyers In Nuwara-Eliya </h1>
                         <p class="lead"></p>
                       
                      </div>
                      <div class="col-md-2 py-5">
                      <a href="/clientprofile" class="btn btn-primary">View Appointments</a>
                      </div>
               </div>
           </div>


        </section>

                     <!-- registration alert -->
      <p class=" msg text-light  bg-danger rounded ">{{ session('msg')}} </p>
  

        

   @foreach($lawyers as $lawyer )
    
   <div class="container">
  
                          <div class="row mt-3">
                          <div class="col-12  ">
                            <div class="card">
                              <div class="card-body">
                                   <div class="row">
                                          <div class="col-md-6">
                                             <img class="rounded-circle" src="img/profile.jpg" id="profImg">
                                          </div>
                                          <div class="col-md-6 text-center">
                                                          <h3 class="card-title bg-dark text-light">{{$lawyer['name']}}</h3>
                                                          <h4>{{$lawyer['description']}}</h4>
                                                          <h5>Lawyer id:{{$lawyer['lawyer_id']}}</h5>
                                                          <h6 class="card-text">
                                                                Special Interested in
                                                          </h6>
                                                          <p>
                                                          
                                                          
                                                          @foreach($lawyer['specialInterest'] as $specialInterest)
                                                         
                                                          <h6 class="bg-info">{{$specialInterest}}</h6>
                                                          
                                                          @endforeach





                                                          <div class="" id="time">
                                                          <div>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Make Appointment
                                    </button>
                                    </div>
                                   
                                    <div class="collapse" id="collapseExample">
                                       <div class="card card-body">
                                                  <h6></h6>
                                                    <form action="/appointment/{{$lawyer['lawyer_id']}}" method="POST">
                                                    @csrf

                                                
                  
                                               
                                                <label  class="label  control-label text-success ">Choose Date </label>
                                                <div class="col-md-10">
                                                
                                                <select class="form-control" name="date">
                                                              <option>{{$date2}}</option>
                                                              <option>{{$date3}}</option>
                                                              <option>{{$date4}}</option>
                                                              <option>{{$date5}}</option>
                                                              <option>{{$date6}}</option>
                                                              <option>{{$date7}}</option>
                                                              <option>{{$date8}}</option>
                                                            
                                            
                                                        </select>

                                                  @error('date')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                              
                                                </div>
                                                <input type="submit" name="submit" value="Make Appointment">
                                           </form>
                                                    
                                         </div>
                                    </div>
                </div>



























                                                          
                                                          </p>
                                                          
                                            </div>
                                    </div>
                               
                              </div>
                            </div>
                            </div>
                            <div>
    </div>


    
  @endforeach


  
  <!-- <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>