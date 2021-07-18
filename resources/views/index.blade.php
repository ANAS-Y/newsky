@extends('master')
@section('content')

<div class="content">
<div class="container-fluid">

<div class="row align-items-md-stretch"> <!-- row1 start here -->
      <div class="card mb-3 border  rounded-3" style="background-color:#D8E1F3;" >
      <div class="h-100 p-2" >
<div id="myCarousel" class="carousel slide img-fluid" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
     <div class="carousel-item  active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    
    @foreach($products as $item)
      <div class="carousel-item img-fluid">
      <img class="bd-placeholder-img img-fluid"  src="{{$item['gallery']}}" >     
          <div class="carousel-caption text-start img-fluid">
            <h1>{{$item['name']}}</h1>
            <p>{{$item['description']}}</p>
            
    <form action="/detail" method="post">
    @csrf
    <input type="hidden" name="id" value = "{{$item['id']}}">
    <p><button class="btn btn-primary">View More Detals</button></p>
    </form>
      </div>
        </div>
      @endforeach
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
 </div>
      </div>
      </div>

  
       <div class="row align-items-md-stretch"> <!-- row1 start here -->
      <div class="col-md-6 mb-2" >
      <div class="h-100 p-5 border  rounded-3" style="background-color:#D8E1F3;" >
        <i class="bi-person-circle" style="font-size: 6em; color:#6A58AE; float: right;"></i>
         <h2 style=" font-family:serif; color: #6A58AE;">Website Administrators</h2>
        <p>Here you can view, add, delete or change the role of website administrator.</p>
          <a class="btn" style="background-color:#6A58AE; color: white;" href="administrator" type="button">Click here to proceed</a >
        </div>
      </div>
      
      <div class="col-md-6 mb-2">
        <div class="h-100 p-5 border rounded-3" style="background-color:#D8E1F3;">
        <i class="bi-bank" style="font-size: 6em; color:#6A58AE; float: right;"></i>
          <h2 style=" font-family:serif; color: #6A58AE;">Product and Services</h2>
          <p>Here you can view available product, add new product, delete or modify product details.</p>
          <a class="btn" style="background-color: #6A58AE; color: white;" href="admin_product" type="button">Click here to proceed</a >
           </div>
            </div>
      </div> <!-- row1 close here -->
      
       <div class="row align-items-md-stretch"> <!-- row1 start here -->
        <div class="col mb-2">
        <div class="h-100 p-5 border rounded-3" style="background-color:#D8E1F3;">
        <i class="bi-whatsapp" style="font-size: 6em; color:#6A58AE; float: right;"></i>
          <h2 style=" font-family:serif; color: #6A58AE;">Product and Services</h2>
          <p>Here you can view available product, add new product, delete or modify product details.</p>
          <a class="btn" style="background-color: #6A58AE; color: white;" href="admin_product" type="button">Click here to proceed</a >
           </div>
            </div>
    </div> <!-- row1 close here -->
    <hr class="featurette-divider">

    <div class="row">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

     <hr class="featurette-divider">

  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div>
@endsection