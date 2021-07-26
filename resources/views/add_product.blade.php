@extends('dashboard')
@section('content')
<div class="content">
<div class=" container h-100 p-5 border  rounded-3" style="background-color:#D8E1F3; margin-bottom:1%;" >
<h2 class="p-2 rounded-3"style=" font-family:serif; color:white;text-align: center; background-color:#6A58AE ;">ADD NEW PRODUCT </h2>
     @if(Session::has('message'))
         @if(Session::get('message')['status']=='error')
  <div class="alert alert-danger alert-block">
<Strong>{{Session::get('message')['message']}}</Strong>
{{Session::forget('message')}}
</div>
@else
<div class="alert alert-success alert-block">
<Strong>{{Session::get('message')['message']}}</Strong>
{{Session::forget('message')}}
</div>
@endif
@endif

    <form action="/adding_product" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-1">
    <div class="col-md-2">
    <label for="fullname" class="form-label">Name</label>
    </div>
    <div class="col"  style="float: right;">
    <input  style="float: right;" type="text" class="form-control" name="name" id="fullname"  required="required">
  </div>
  </div>
  
  <div class="row mb-1">
    <div class="col-md-2">
    <label for="Description" class="form-label">Description</label>
    </div>
  <div class="col">
    <textarea  name="description"class="form-control" id="Description" required="required"></textarea>
  </div>
  </div>
  
  <div class="row mb-1">
  <div class="col-md-2">
    <label for="price" class="form-label">Price</label>
    </div>
    <div class="col">
    <input type="text" class="form-control" id="price" name="price" required="required">
  </div>
  </div>
 
   <div class="row mb-1">
    <div class="col-md-2">
    <label for="Category" class="form-label">Category</label>
    </div>
    <div class="col" >
    <select size="1" id="Category" name="category" class="form-control">
	<option value="Hardware Product">Hardware Product</option>
	<option value="Software Product">Software Product</option>
	<option value="Proffessional services">Proffessional services</option>
	<option value="Educational services">Educational services</option>
	<option value="Mobile Applications">Mobile Applications</option>
</select>
         </div>
  </div>
  
  <div class="row mb-1">
  <div class="col-md-2">
    <label for="picture" class="form-label">Picture</label>
    </div>
    <div class="col">
    <input type="file" class="form-control" id="picture" name="file" required="required">
  </div>
  </div>
  
  <div class="col">
    <button type="submit" class="btn form-control"  style=" background-color: #6A58AE; color: white;">submit</button>
  </div>
</form>
  </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div><!-- /.container -->
@endsection