@extends('dashboard')
@section('content')
<div class="content">
<div class="container-fluid">

 @forelse($details as $detail)   
<div class="row align-items-center"> <!-- row1 start here -->
    <div class=" col  p-5 mb-3 bg-light rounded-3 border">
        <h2><em>Organisation Details</em></h2><br />
        
<div class="row align-items-center row1 "> <!-- row1 start here -->
 <div class="col mb-3">
        <div class="p-3 border rounded-3">
          <h2>About Us</h2>
        <p> Organisation Name: {{$detail->orgName}}</p>
        <p> {{$detail->about}}</p>
          
        </div>
      </div>
</div>

<div class="row align-items-center row1 "> <!-- row1 start here -->
 <div class="col">
        <div class="p-3 border rounded-3">
          <h2>Our Mission</h2>
        <p>{{$detail->mission}}</p>
          
        </div>
      </div>
      
      <div class="col ">
        <div class=" p-3 bg-light border rounded-3">
          <h2>Our Vision</h2>
          <p><p> {{$detail->vision}}</p></p>
          
        </div>
      </div>
      </div>
      <br />
 <div class="row align-items-center row1 "> <!-- row1 start here -->
 <div class="col">
        <div class="p-3 mb-5 border rounded-3">
          <h2>Address</h2>
        <h3>Offices addresses</h3>
        <p>{{$detail->address1}}</p>
        <p>{{$detail->address2}}</p>
        <p>{{$detail->address3}}</p>
        <h3>Phone Numbers</h3>
        <p>{{$detail->phone1}}</p>
        <p>{{$detail->phone2}}</p>
        <p>{{$detail->phone3}}</p>
        </div>
      </div>
</div>
      
      </div>  
      
<div class="row align-items-center"> <!-- row1 start here -->
<div class="col mb-5"><a href="edit_organisation"class="btn btn-warning mb-2" type="button">Edit Organisation Detail</a>
<a class="btn btn-danger mb-2" type="button" href="delete_organisation/{{$detail->id}}">Delete Organisation Detail</a>
<a class="btn btn-primary mb-2" type="button" href="add_staff">Add Organisation staff</a>
  </div>
 </div>
 </div> <!-- row2 close here -->
 @empty
 <div class="row align-items-center"> <!-- row1 start here -->
<div class="col mb-5 border bg-light p-5 rounded-3 align-items-center"><a class="btn btn-primary  mb-2 align-items-center" href="/add_organisation" type="button">Click Here to Add Organisation Detail</a></div>
   </div>
 @endforelse
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

          @if(count($staffs)>0)
          <h2 style=" font-family:serif; color: #6A58AE;">List of Staff</h2>
          <div class="row border" style="background-color: #6A58AE;color: white;margin-bottom:0.5em;alignment-adjust: central;"> 
          <div class="col border">STAFF ID</div>
          <div class="col border">Name</div>
          <div class="col border">Phone Number 1</div>
          <div class="col border">Phone Number 2</div>
          <div class="col border">Position</div>
          <div class="col border">Action</div>
          </div>
          @foreach($staffs as $order)
          <div class="row border"> 
          <div class="col border">{{$order->file_number}}</div>
          <div class="col border">{{$order->first_name}} {{$order->last_name}} {{$order->other_name}}</div>
          <div class="col border">{{$order->phone1}}</div>
          <div class="col border">{{$order->phone2}}</div>
          <div class="col border">{{$order->position}}</div>
          <div class="col border" >
          <form action="edit_staff" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$order->file_number}}"/>
          <div class="col"><div class="row"><div class="col-md-3 p-2"><input type="submit" class="btn "  value="Update"style="color:white;background-color:#6A58AE;"></div>
           <div class="col p-2 "><a class="btn " style="  margin-left:40%;color:white;background-color: #E5017E;"type="button" href="delete_staff/{{$order->file_number}}">Delete</a ></div></div></div></form>

            </div> 
             </div>         
            @endforeach
            @else
            <p>No Staff Details Uploaded </p>
            @endif
            <br />
                     
      </div>
      </div>
    </div> <!-- row1 close here -->
</div>
</div><!-- container close here -->

@endsection