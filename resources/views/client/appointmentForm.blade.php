




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha584-Gn5584xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E265XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha584-lZN57f5QGtY5VHgisS14W5ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  

  <style>
 body{
    background:url('img/clientback.jpg');
    background-size:cover;
    background-attachment:fixed;

  }
  .booking-form-box{
      
      border:1px solid #ced4da;
      margin:10% auto 0;
  }
  </style>
  </head>
  <body>
     <div class="container">
      <h1>Appointment Form For </h1> 
     <h2> Lawyer---{{$lawyer['name']}}</h2>
     <h5> Lawyer_id---{{$lawyer['lawyer_id']}}</h5>
     <h5>Requested Date-----{{$requestedDate}}</h5>

                                                    <!-- showing time with status -->
                                                    <div class="m-5 col-md-8">

                                            <table class="table table-striped">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            
                                                            
                                                            <th> Time</th>
                                                            <th> Available Status</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($available as $ava)
                                                        <tr>
                                                            
                                                            <td>{{ $ava['availableTime']}}</td>
                                                            <td>{{ $ava['currentStatus']}}</td>
                                                
                                                        </tr>
                                                        @endforeach
                                                        
                                            
                                                    
                                                    
                                                
                                                    </tbody>
                                            </table>


                                            </div>
                                                

              <div class="booking-form-box" >

         
                  
                   
             
                       
             
                              
                     

            <form action="/saveAppointment/{{$lawyer['lawyer_id']}}/{{$requestedDate}}" method="POST">
                        @csrf
                       <!-- <div class="row m-2">
                           <label  class="label col-md-5 control-label ">Name</label>
                           <div class="col-md-10">
                           <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name">
                           @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                       </div> -->
                       <!-- <div class="row m-2">
                           <label  class="label col-md-5 control-label">Email</label>
                           <div class="col-md-10">
                           <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail">
                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>

                       </div> -->
                       <!-- <div class="row m-2">
                            <label  class="label col-md-5 control-label">Gender</label>
                            <div class="col-md-10">
                                <input type="radio" class=" ml-5 @error('gender') is-invalid @enderror" name="gender" value="male"><small>Male</small><br>
                                <input type="radio" class="ml-5 @error('gender') is-invalid @enderror" name="gender" value="female"><small>Female</small>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div> -->

                     
                       <div class="row m-2">
                       
                       <label  class="label col-md-5 control-label">Type Of Legal Issue/issues</label>
                       <div class="col-md-10 ">
                       
                           <input type="checkbox" class="ml-5 @error('type_of_legal_issues') is-invalid @enderror" name="type_of_legal_issues[]" value="civil"><small> Civil Related Issues</small><br>
                           <input type="checkbox" class="ml-5 @error('type_of_legal_issues') is-invalid @enderror"name="type_of_legal_issues[]" value="criminal"><small> Criminal Related Issues</small><br>
                           <input type="checkbox"class="ml-5 @error('type_of_legal_issues') is-invalid @enderror"  name="type_of_legal_issues[]" value="commercial"><small> Commercial  Related Issues</small>
                             <br>  <a href="/legalIssues" >To Know more information about Legal issues</a>
                         
                           @error('type_of_legal_issues')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                       </div>
                     
                  </div>
                 
                           <div class="row m-2">
                           <label  class="label col-md-5 control-label ">Choose Time for your appointment</label>
                           <div class="col-md-10">
                          
                               
                                                                                
                                                                   
                                             
                                              
                                              
                                                
                                                                            <select class="form-control" name="time">
                                                                                @foreach($availableTime as $time)
                                                                            <option>  {{ $time['availableTime']}}</option> 
                                                                            @endforeach
                                                                            </select>
                 
                                            
                                                

                                                @error('time')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                           </div>
                       </div>
                     
                       <div class="row m-2">
                           <label  class="label col-md-5 control-label">Description about you issue</label>
                           <div class="col-md-10">
                           <textarea  class="form-control @error('description') is-invalid @enderror" name="description" placeholder="small description about your legal issues"></textarea>
                           @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                       </div>

                       <input type="submit" name="submit" class="m-4 btn btn-info" value="Add Appointment">
                       <a href="/neliya" class=" m-4 btn btn-warning">Cancel</a>












                        </form>
              </div>  
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-5.2.1.slim.min.js" integrity="sha584-KJ5o2DKtIkvYIK5UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF95hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha584-ApNbgh9B+Y1QKtv5Rn7W5mgPxhU9K/ScQsAP7hUibX59j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha584-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    </body>
</html>