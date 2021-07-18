@extends('master')
@section('content')
<div class="content">
<div class="row align-items-center row1 "> <!-- row1 start here -->
<div class="container-xl py-4">

@forelse($details as $detail) 
    <div class="p-3 mb-4  rounded-3 border carttag">
      <div class="container-fluid py-5">
        <h1 class="display-7 fw-bold cartheader" >Our Contact <i class="bi-house" ></i></h1>
        <h5 class="cartheader2">Visit our Offices every Monday to Saturday from 9am to 6pm </h5>
        <hr class="featurette-divider">
<p><p class="display-8 fw-bold" >ADDRESS :</p>  {{$detail->address1}}</p>
<p style="font-style: oblique;"> {{$detail->address1}}</p>
<p> {{$detail->address2}}</p>
<p> {{$detail->address3}}</p>
</div>
    </div>


    <div class="row align-items-md-stretch"> <!-- row2 start here -->
       <div class="col-md-6">
        <div class="h-100 p-5  border rounded-3 carttag">
          <h2 class="cartheader">Support <i class="bi-phone" ></i></h2>
          <h5 class="cartheader2">From 8:00am - 6:00pm </h5>
          <hr class="featurette-divider">
          <p>{{$detail->phone1}}</p>
          <p>{{$detail->phone2}}</p>
          <p>{{$detail->phone3}}</p>
        </div>
      </div>
      
      <div class="col-md-6">
      <div class="h-100 p-5 carttag border rounded-3">
           <h2 class="cartheader">Email <i class="bi-envelope" ></i></h2>
           <h4 class="cartheader2">Reach us 24/7 via these channels</h4>
           <hr class="featurette-divider">
              <p>info@newsky.com.ng</p>
          <p>ceo@newsky.com.ng</p>
          <p>newskytechltd@gmail.com</p>
                </div>
      </div>
       </div> <!-- row2 close here -->
      <br />
      
        <div class="col p-3 mb-4 carttag rounded-3 border">
      <div class="container-fluid py-5">
        <h2 class="display-7 fw-bold cartheader">Social Media</h2>
        <h5 class="cartheader2">Click on any of the following button to follow us</h5>
        <hr class="featurette-divider">
<a href="#" style="text-decoration: none;"> <i class="bi-facebook py-5" style="font-size: 3em; color: blue;"></i>  </a>
<a href="#" style="text-decoration: none;"><i class="bi-whatsapp" style="font-size: 3em; color: green;"></i></a>
<a href="#" style="text-decoration: none;"><i class="bi-twitter" style="font-size: 3em; color:#00CCFF;"></i></a>
<a href="#" style="text-decoration: none;"><i class="bi-instagram" style="font-size: 3em; color:#E5017E;"></i></a>

</div>
    </div>
    </div>
    
   
    

@empty
<div class="col">
        <div class="h-100 p-5 carttag border rounded-3">
          <h2>Please Check Back Later</h2>
          <p>The information about the organisation is not available now please check back later. <br/> Thank you</p>
          <a class="btn btn-outline-secondary" type="button" href="/">Back</a>
        </div>
      </div>
@endforelse
</div><!-- row1 close here -->
</div><!-- container close here -->
</div><!-- container close here -->
@endsection