<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
$total = ProductController::cartItem();
}
 ?>

<nav class="navbar navbar-expand-md navbar-light bg-color fixed-top ">
<div class="container-fluid">
<div class="row">
<a class="navbar-brand " style="color:#D8E1F3" href="/"><img class="logo me-2"  role="img" src="img/logo.png" alt="" >................</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
</div>
      <div class="row mynav">
      
      <form class=" searchform d-flex col ">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>
       <div class="collapse navbar-collapse " id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0 navbar-nav2 rounded-3">
        <li class="nav-item">
          <a class="nav-link active" style="color: white;"aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color: white;" href="about">About Us</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link"style="color: white;" href="#">Our Services</a>
        </li>
        
         @if (Session::has('user'))
        <li class="nav-item">
          <a class="nav-link" style="color: white;"href="myorders">Orders</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" style="color: white;"href="contact">Contact Us</a>
        </li>
        
      </ul>
     
       

      <ul class="nav navbar-nav navbar-right">
       <li class="nav-item">
          <a href="#" style="text-decoration: none;" class="nav-link" > <i class="bi-facebook py-5" style="font-size: 2em; color: blue;"></i></a>
        </li>
        @if (Session::has('user'))
      <li> <a href="/cartlist" style="color:#EF1384; text-decoration:none;margin-left:6px;">{{$total}}<i class="bi-cart-fill" style="font-size: 3em; color:#6A58AE;"> </i> </a> </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">{{Session::get('user')['name']}}</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
             <li><a class="dropdown-item" href="/logout"><i class="bi-person-fill" style="font-size: 3em; color:#6A58AE;"></i><br/>Log Out</a></li>
        @else
               <li><a class="btn btn-outline border me-1 " style=" text-decoration:none;margin-top:0.8em; background-color: #6A58AE; color: white;" href="/login">login</a></li>
              <li><a class="btn btn-outline border mb-2"  style=" text-decoration:none;margin-top:0.8em; background-color: #6A58AE; color: white;"  href="/register">Register</a></li>
              @endif
       
           </ul>
          </li>
          
      </ul>
      </div>
    </div>
  </div>
</nav>
<div class="nav-margin"></div>