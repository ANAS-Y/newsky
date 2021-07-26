
@extends('dashboard')
@section('content')
<div class="content">
  <div class=" marketing" style="width:95%;margin:0 auto;">

       <div class="row align-items-md-stretch"> <!-- row1 start here -->
      <div class="col-md-6 mb-2" >
      <div class="h-100 p-5 border bg-light rounded-3" >
        <i class="bi-person-circle" style="font-size: 6em; color: #6A58AE; float: right;"></i>
         <h2 style=" font-family:serif; color: #6A58AE;">Website Administrators</h2>
        <p>Here you can view, add, delete or change the role of website administrator.</p>
          <a class="btn btn btn-outline-secondary" style="background-color: #6A58AE; color: white;"  href="administrator" type="button">Click here to proceed</a >
        </div>
      </div>
      
      <div class="col-md-6 mb-2">
        <div class="h-100 p-5 border rounded-3 bg-light">
        <i class="bi-bank" style="font-size: 6em; color: #6A58AE; float: right;"></i>
          <h2 style=" font-family:serif; color: #6A58AE;">Product and Services</h2>
          <p>Here you can view available product, add new product, delete or modify product details.</p>
          <a class="btn btn-outline-secondary" style="background-color: #6A58AE; color: white;" href="admin_product" type="button">Click here to proceed</a >
           </div>
      </div>
    </div> <!-- row1 close here -->
   
    
    <div class="row align-items-md-stretch"> <!-- row2 start here -->
      <div class="col-md-6 mb-2">
        <div class="h-100 p-5  border bg-light rounded-3">
        <i class="bi-cart-fill" style="font-size: 6em;color: #6A58AE;  float: right;"></i>
          <h2 style=" font-family:serif; color: #6A58AE;">Customer Orders</h2>
        <p>Here you can view, delete or change the status of customers order.</p>
          <a class="btn btn-outline-secondary" style="background-color: #6A58AE; color: white;" href="/admin_order" type="button">Click here to proceed</a >
        </div>
      </div>
      
      <div class="col-md-6 mb-2">
        <div class="h-100 p-5  bg-light rounded-3">
        <i class="bi-people-fill" style="font-size: 6em; color: #6A58AE; float: right;"></i>
          <h2 style=" font-family:serif; color: #6A58AE;">Organization Details</h2>
          <p>Here you can view organisation details and available staff, add new organisation or staff details and also delete or modify some details.</p>
          <a class="btn btn-outline-secondary" style="background-color: #6A58AE; color: white;" href="organisation" type="button">Click here to proceed</a >
           </div>
      </div>
    </div> <!-- row2 close here -->
    
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div>
  @endsection