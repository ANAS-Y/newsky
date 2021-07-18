@extends('dashboard')
@section('content')
<div class="content">
<div class=" container h-100 p-5 border  rounded-3" style="background-color:#D8E1F3; margin-bottom:1%;" >
<h4 class="p-3 rounded-3"style=" font-family:serif; text-align: center; ">UPDATE STAFF DETAIL</h4>
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
@foreach($staffs as $staff)
    <form action="/save_staff" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row mb-1">
    <div class="col" >
     <img src="img/NST17001.jpg" width="20%"/>
      </div>
  </div>
    <div class="row mb-1">
    <div class="col" >
    <input placeholder="ID NUMBER"  type="text" value="{{$staff->file_number}}" class="form-control" name="fileNo"  required="required">
  </div>
  </div>
    
    <div class="row mb-1">
    <div class="col" >
    <input placeholder="First Name" value="{{$staff->first_name}}" type="text" class="form-control" name="fname"  required="required">
  </div>
  </div>
   <div class="row mb-1">
    <div class="col" >
    <input  type="text" placeholder="Last Name" value="{{$staff->last_name}}" class="form-control" name="lname"  required="required">
  </div>
  </div>
  
   <div class="row mb-1">
    <div class="col" >
    <input  type="text" placeholder="Other Name" class="form-control" name="oname" value="{{$staff->other_name}}" >
  </div>
  </div>
  
 <div class="row mb-1">
    <div class="col" >
    <input  type="text" placeholder="Position" class="form-control" name="post" value="{{$staff->position}}" required="required">
  </div>
  </div>
  <div class="row mb-1">
    <div class="col" >
    <textarea class="form-control" name="cv" placeholder="CV"  required="required">{{$staff->cv}}</textarea>
  </div>
  </div>
  
   <div class="row mb-1">
    <div class="col" >
    <input  type="phone" placeholder="Phone Number 1" class="form-control" name="phone1" value="{{$staff->phone1}}" required="required">
  </div>
  </div>
  
  <div class="row mb-1">
    <div class="col" >
    <input  type="phone" placeholder="Phone Number 2" class="form-control" name="phone2" value="{{$staff->phone2}}"  ">
    
  </div>
  </div>
  
  <div class="row mb-1">
  <div class="col-md-2">
    <label for="picture" class="form-label">Passport</label>
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
@endforeach
@endsection