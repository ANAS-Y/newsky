<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
$total = ProductController::cartItem();
}
 ?>

<nav class="navbar navbar-expand-md navbar-light fixed-top ">
<div class="container-fluid">
<div class="row">
<a class="navbar-brand " style="color:#169b52;" href="#"><img src="img/logo.png" alt="" >New Sky Technologies</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
</div>
      <div class="row mynav">
      <form class="d-flex col">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
        <i class="bi-alarm"></i>
          <a class="nav-link active" aria-current="page" href="/"><i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">Our Services</a>
        </li>
        @if (Session::has('user'))
        <li class="nav-item">
          <a class="nav-link" href="myorders">Orders</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if (Session::has('user'))
      <li> <a href="/cartlist" style="color:#169b52; text-decoration:none;margin-left:6px;"> Cart( {{$total}} )</a> </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">{{Session::get('user')['name']}}</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="/logout">log out</a></li>
              @else
               <li><a  style="color:#169b52; text-decoration:none;" class="dropdown-item btn me-2" href="/login">login</a></li>
              <li><a  style="color:#169b52; text-decoration:none;" class="dropdown-item btn me-2 " href="/register">Register</a></li>
              @endif
           </ul>
          </li>
      </ul>
      </div>
    </div>
  </div>
</nav>