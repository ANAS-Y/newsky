@extends('dashboard')
@section('content')
<div class="content">
<div class=" container h-100 p-5 border  rounded-3" style="background-color:#D8E1F3; margin-bottom:1%;" >
<h2 class="p-2 rounded-3"style=" font-family:serif; color:white;text-align: center; background-color:#6A58AE ;">ADMIN REGISTRATION</h2>
    
    <form action="/add_admin" method="POST">
    @csrf
    <div class="row mb-1">
    <div class="col-md-2">
    <label for="fullname" class="form-label">Ful Name</label>
    </div>
    <div class="col"  style="float: right;">
    <input  style="float: right;" type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name " required="required">
  </div>
  </div>
  
  <div class="row mb-1">
    <div class="col-md-2">
    <label for="email" class="form-label">Email</label>
    </div>
  <div class="col">
    <input type="email" name="email"class="form-control" id="email" required="required">
  </div>
  </div>
  
  <div class="row mb-1">
  <div class="col-md-2">
    <label for="Password" class="form-label">Password</label>
    </div>
    <div class="col">
    <input type="password" class="form-control" id="Password" name="Password" required="required">
  </div>
  </div>
 
    <div class="row mb-1">
    <div class="col-md-2">
    <label for="phone" class="form-label">Phone No:</label>
    </div>
    <div class="col">
        <input type="phone number" class="form-control" id="phone" Name="phone" placeholder="Phoner Number" required="required">
  </div>
  </div>
  
  <div class="col">
    <button type="submit" class="btn form-control"  style=" background-color: #6A58AE; color: white;">Register</button>
  </div>
</form>
  </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div><!-- /.container -->
@endsection