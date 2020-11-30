<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #pag-header{
        height:150px;
        background:url('img/law.jpg');
       background-size:cover;
        background-attachment:fixed;
        color:#fff;
        border-bottom:1px #eee solid;
        padding-top:50px;
        background-repeat:no-repeat;

    }
   </style>
  
  </head>
  <body>
  <header id="pag-header">
           <div class="container">
                 <div class="row">
                    <div class="col-md-10 text-center">
                          <h2> Details of laws</h2>
                



                    </div>
                    <div class="col-md-2">
                    <a href="/home" class="btn btn-primary ">back to Search</a>
                    </div>
                   
                 </div>
           </div>
     </header>

     <h1>Showing results for<b> {{$id}}</b> in <b>{{ $dis}} </b> Type </h1>
     
   
     
     @foreach($lawyer as $law)

     @foreach($law['specialInterest'] as $specialInterest)
                                                          
                  @if($specialInterest==$dis)
                    
                     <div class="container">


 <div class="row mt-3">
                           <div class="col-12  ">
                             <div class="card">
                               <div class="card-body">
                                    <div class="row">
                                           <div class="col-md-6">
                                              <img class="rounded-circle" src="img/lawyer.jpg" id="profImg">
                                           </div>
                                           <div class="col-md-6 text-center">
                                                           <h3 class="card-title bg-dark text-light">{{$law['name']}}</h3>
                                                           <h4>{{$law['description']}}</h4>
                                                           <h5>law id:{{$law['lawyer_id']}}</h5>
                                                           <h6 class="card-text">
                                                                 Special Interested in
                                                           </h6>
                                                           <p>
                                                           
                                                           
                                                           @foreach($law['specialInterest'] as $specialInterest)
                                                          
                                                           <h6 class="bg-info">{{$specialInterest}}</h6>
                                                           
                                                           @endforeach
                                                           
                                                           </p>
                                                           <a href="/appointment/{{$law['lawyer_id']}}" class="btn btn-primary ">make appointment</a>
                                             </div>
                                     </div>
                                
                               </div>
                             </div>
                             </div>
                             <div>
                             

     
    
 </div>

                  @endif
                                                          
            @endforeach
     @endforeach







   

   
   

 




    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

