@extends('master')
@section('content')
<div class="content">
<div class="row align-items-center row1 "> <!-- row1 start here -->
<div class="container-xl py-4">
@forelse($details as $detail) 
    <div class="p-3 mb-4  rounded-3 border carttag">
      <div class="container-fluid py-5">
        <h1 class="display-7 fw-bold cartheader" >About Us</h1>
<p> {{$detail->about}}</p>
  <button class="btn text-white" style="background-color: #6A58AE;" type="button">Read More</button>
      </div>
    </div>


    <div class="row align-items-md-stretch"> <!-- row2 start here -->
      <div class="col-md-6">
        <div class="h-100 p-4  border rounded-3 carttag">
          <h2 class="cartheader">Our Mission</h2>
        <p>{{$detail->mission}}</p>
          <button class="btn btn-outline-secondary"  type="button">Read More</button>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="h-100 p-4  border rounded-3 carttag">
          <h2 class="cartheader">Our Vision</h2>
          <p>{{$detail->vision}}</p>
          <button class="btn btn-outline-secondary" type="button">Read More</button>
        </div>
      </div>
    </div> <!-- row2 close here -->
@empty
<div class="col">
        <div class="h-100 p-5  border rounded-3 carttag">
          <h2 class="cartheader">Please Check Back Later</h2>
          <p>The information about the organisation is not available now please check back later. <br/> Thank you</p>
          <a class="btn btn-outline-secondary" type="button" href="/">Back</a>
        </div>
      </div>
@endforelse
</div><!-- row1 close here -->
</div><!-- container close here -->
</div><!-- container close here -->
@endsection