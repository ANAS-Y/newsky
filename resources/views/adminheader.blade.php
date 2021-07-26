@if (Session::has('admin'))
<header class="navbar  sticky-top  flex-md-nowrap p-0 shadow" >
<nav class="navbar navbar-expand-md navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand " style="color:#D8E1F3" href="/"><img class="logo me-2"  role="img" src="img/logo.png" alt="" >................</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="nav navbar-nav navbar-right" style="float: right;margin-left: 100%;">
           <li class="nav-item dropdown">
           <li style=""><a class="dropdown-item" href="/logout"><i class="bi-person-fill" style="font-size: 3em; color:#6A58AE;"></i><br/>Log Out</a></li>
          </li>
          <p class="navbar-brand text-muted" style="color:#6B59AF;font-size:0.8em; margin-left: 1%;">{{Session::get('admin')['name']}}</p>
          
      </ul>
    </header>
  <div class="container-fluid">
  <div class="row" >
    <nav id="sidebarMenu" style="background-color: #E5017E;" class="col-md-2 col-lg-2 d-md-block  text-white sidebar collapse" style="font-size:11px;">
      <div class="position-sticky pt-5">
        <ul class="nav flex-column">
         <li class="nav-item">
          <a class="nav-link" style="color: white;" aria-current="page" href="/home">
          <i class="bi-house" style="font-size: 1.1em; color: white;"> </i>
          Dashboard</a>
        </li>
        <hr class="featurette-divider">
        <li class="nav-item">
          <a class="nav-link" style="color: white;" href="/administrator">  
           <i class="bi-person" style="font-size: 1.1em; color: white;"> </i>
           Administrators
          </a>
        </li>
        <hr class="featurette-divider">
        <li class="nav-item">
          <a class="nav-link" style="color: white;"href="/admin_order">
          <i class="bi-cart" style="font-size: 1.1em; color: white;"> </i>
          Orders</a>
        </li>
        <hr class="featurette-divider">
        <li class="nav-item">
          <a class="nav-link" style="color: white;"href="admin_product">
          <i class="bi-bank" style="font-size: 1.1em; color: white;"> </i>
          Products</a>
        </li>
        <hr class="featurette-divider">
        <li class="nav-item">
          <a class="nav-link" style="color: white;"href="organisation">
          <i class="bi-people" style="font-size: 1.1em; color: white;"> </i>
          Organization Details</a>
        </li>
      </ul>
    </div>
    </nav>
@else
<script>window.location="/login";</script>
 @endif
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">

      
      
