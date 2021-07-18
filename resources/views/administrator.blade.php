
@extends('dashboard')
@section('content')
<div class="content">
  <div class=" marketing" style="width:95%;margin:0 auto;">

       <div class="row align-items-md-stretch"> <!-- row1 start here -->   
      <div class="col mb-2">
        <div class="h-100 p-5 bg-light border rounded-3">
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
          <h2 style=" font-family:serif; color: #6A58AE;">List of Site Administrators</h2>
          <div class="row border" style="background-color: #6A58AE;color: white;margin-bottom:0.5em;alignment-adjust: central;"> 
          <div class="col border">Full Name</div>
          <div class="col border">Email</div>
           <div class="col border">Phone Number</div>
            <div class="col border">Action</div>
          </div>
          @foreach($admins as $admin)
          <div class="row border"> 
          <div class="col border">{{$admin['name']}}</div>
          <div class="col border">{{$admin['email']}}</div>
           <div class="col border">{{$admin['phone']}}</div>
            <div class="col border" ><a class="btn " style="margin-left:30%;color:white;background-color: #E5017E;"type="button" href="/admin_delete/{{$admin['email']}}">Delete Admin</a ></div>
            </div>
            @endforeach
            <br />
           <a class="btn btn " style="color:white;background-color:#6A58AE;" href="register_admin" type="button" >Add new Admin</a >
           </div>
      </div>
    </div> <!-- row1 close here -->
    <hr class="featurette-divider">
    
  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div>
  @endsection