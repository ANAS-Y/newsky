
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

<div class="row"> <div class="col"><form method="get" action="o_search"><input name="id" type="text" placeholder="Order Id" size="100" class="form-control" /></div><div class="col">
<input type="submit"class="btn btn " style="color:white;background-color:#6A58AE;" value="SEARCH"> </form><div></div></div>
         
          @if(count($orders)>0)
          <h2 style=" font-family:serif; color: #6A58AE;">List of Pending Orders</h2>
          <div class="row border" style="background-color: #6A58AE;color: white;margin-bottom:0.5em;alignment-adjust: central;"> 
          <div class="col border">Ordert ID</div>
          <div class="col border">Name</div>
          <div class="col border">Phone Number</div>
          <div class="col border">Address</div>
          <div class="col border">Products</div>
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
           <div class="col border" ><a class="btn " style="margin-left:30%;color:white;background-color:#6A58AE;"type="button" href="confirm_order/{{$order->id}}">Confirm</a >
           <a class="btn " style="  margin-left:30%;color:white;background-color: #E5017E;"type="button" href="delete_order/{{$order->id}}">Delete</a ></div>

                        </div>
            @endforeach
            @else
            <p>No Pending order </p>
            @endif
            <br />
                      </div>
      </div>
    </div> <!-- row1 close here -->
    <hr class="featurette-divider">
    <div class="row align-items-md-stretch"> <!-- row1 start here -->   
      <div class="col mb-2">
        <div class="h-100 p-5 bg-light border rounded-3">
         
          @if(count($orders2)>0)
          <h2 style=" font-family:serif; color: #6A58AE;">List of Confirmed Orders</h2>
          <div class="row border" style="background-color: #6A58AE;color: white;margin-bottom:0.5em;alignment-adjust: central;"> 
          <div class="col border">Ordert ID</div>
          <div class="col border">Name</div>
          <div class="col border">Phone Number</div>
          <div class="col border">Address</div>
          <div class="col border">Products</div>
          <div class="col border">Status</div>
          <div class="col border">Payment Method</div>
          <div class="col border">Payment Status</div>
          <div class="col border">total Price</div>
            <div class="col border">Action</div>
          </div>
          @foreach($orders2 as $order)
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
           <div class="col border" ><a class="btn " style="margin-left:30%;color:white;background-color: #E5017E;"type="button" href="print_order/{{$order->id}}">Print</a ></div>

                        </div>
            @endforeach
            @else
            <p>No Corfirmed Orders  </p>
            @endif
            <br />
                      </div>
      </div>
    </div> <!-- row1 close here -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div>
</div>
</div><!-- /.container -->
  @endsection