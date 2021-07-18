@extends('dashboard')
@section('content')
<div class="content">
<div class=" container h-100 p-5 border  rounded-3" style="background-color:#D8E1F3; margin-bottom:1%;" >
<h4 class="p-3 rounded-3"style=" font-family:serif; text-align: center; ">ADD ORGANISATION DETAIL</h4>
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

    <form action="/adding_organisation" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-1">
    <div class="col-md-2">
    <label for="fullname" class="form-label">Organisation Name</label>
    </div>
    <div class="col"  style="float: right;">
    <input  style="float: right;" type="text" class="form-control" name="name" id="fullname"  required="required">
  </div>
  </div>
  
  <div class="row mb-1">
    <div class="col-md-2">
    <label for="Description" class="form-label">About</label>
    </div>
  <div class="col">
    <textarea  name="about"class="form-control" id="Description" required="required"></textarea>
  </div>
  </div>
  
  <div class="row mb-1">
  <div class="col-md-2">
    <label for="price" class="form-label">Mission</label>
    </div>
    <div class="col">
    <input type="text" class="form-control" id="price" name="mission" required="required">
  </div>
  </div>
  
  
  <div class="row mb-1">
  <div class="col-md-2">
    <label for="price" class="form-label">Vision</label>
    </div>
    <div class="col">
    <input type="text" class="form-control" id="price" name="vision" required="required">
  </div>
  </div>

  <div class="row mb-1">
    <div class="col-md-2">
    <label for="Description" class="form-label">Address 1</label>
    </div>
  <div class="col">
    <textarea  name="address1"class="form-control" id="Description" required="required"></textarea>
  </div>
  </div>
  
  <div class="row mb-1">
    <div class="col-md-2">
    <label for="Description2" class="form-label">Address 2</label>
    </div>
  <div class="col">
    <textarea  name="address2"class="form-control" id="Description2" ></textarea>
  </div>
  </div>
  
  <div class="row mb-1">
    <div class="col-md-2">
    <label for="Description3" class="form-label">Address 3</label>
    </div>
  <div class="col">
    <textarea  name="address3"class="form-control" id="Description3" ></textarea>
  </div>
  </div>
  
   <div class="row mb-1">
  <div class="col-md-2">
    <label for="price2" class="form-label">Phone</label>
    </div>
    <div class="col">
    <input type="phone" class="form-control" id="price2" name="phone" required="required">
  </div>
  </div>
  
   <div class="row mb-1">
  <div class="col-md-2">
    <label for="price3" class="form-label">Phone 2</label>
    </div>
    <div class="col">
    <input type="phone" class="form-control" id="price3" name="phone2" >
  </div>
  </div>
  
   <div class="row mb-1">
  <div class="col-md-2">
    <label for="price4" class="form-label">Phone 3</label>
    </div>
    <div class="col">
    <input type="phone" class="form-control" id="price4" name="phone3" >
  </div>
  </div>
  
  <div class="row mb-1">
  <div class="col-md-2">
    <label for="picture" class="form-label">logo</label>
    </div>
    <div class="col">
    <input type="file" class="form-control" id="picture" name="file" required="required">
  </div>
  </div>
  
  <div class="col">
    <button type="submit" class="btn form-control"  style=" background-color: #6A58AE; color: white;">Submit</button>
  </div>
</form>
  </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div><!-- /.container -->
@endsection