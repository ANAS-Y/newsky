
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
          @if($orders)
          <h2 style=" font-family:serif; color: #6A58AE;">Result of the search</h2>
          <div class="row border" style="background-color: #6A58AE;color: white;margin-bottom:0.5em;alignment-adjust: central;"> 
          <div class="col border">Ordert ID</div>
          <div class="col border">Name</div>
          <div class="col border">Phone Number</div>
          <div class="col border">Address</div>
          <div class="col border">products</div>
          <div class="col border">Status</div>
          <div class="col border">Payment Method</div>
          <div class="col border">Payment Status</div>
          <div class="col border">total Price</div>
            <div class="col border">Action</div>
          </div>
          @foreach($orders as $order)
          <div class="row border"> 
         
          <div class="col border">{{$order->id}}</div>
          <div class="col border">{{$order->fullname}}</div>
          <div class="col border">{{$order->phone}}</div>
          <div class="col border">{{$order->address}}</div>
          <div class="col border">{{$order->name}}</div>
          <div class="col border">{{$order->status}}</div>
          <div class="col border">{{$order->payment_method}}</div>
           <div class="col border">{{$order->payment_status}}</div>
           <div class="col border">{{$order->price}}</div>
           <div class="col border" ><a class="btn " style="margin-left:30%;color:white;background-color: #E5017E;"type="button" href="#/{{$order->id}}">Print</a >
           </div></div>
            @endforeach
            <div class="col" ><a class="btn " style="margin-top:5px; color:white;background-color: #E5017E;"type="button" href="admin_order">Back</a ></div>
            </div>
            
             
            @else
            <p>No order found with this ID </p>
             <div class="col" ><a class="btn " style="margin-top:5px;color:white;background-color: #E5017E;"type="button" href="admin_order">Back</a ></div>

            @endif
            <br />
            </div>
      </div>
    </div> <!-- row1 close here -->
    <hr class="featurette-divider">
    
  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div>
  @endsection