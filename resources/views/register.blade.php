@extends('master')
@section('content')
<main style="margin-top:100px;">


  <div class="container marketing">
<h1>New User registration Form</h1>
    <hr class="featurette-divider">

    <form action="/registeruser" class="row g-3" method="POST">
    @csrf
    <div class="col-12">
    <label for="fullname" class="form-label">Ful Name</label>
    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name " required="required">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email"class="form-control" id="email" required="required">
  </div>
  <div class="col-md-6">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password" required="required">
  </div>
 
    <div class="col-12">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="phone number" class="form-control" id="phone" Name="phone" placeholder="Phoner Number" required="required">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</main>
@endsection