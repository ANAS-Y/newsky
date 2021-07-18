
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
          @if(isset($products))
          <h2 style=" font-family:serif; color: #6A58AE;">List of Uploaded Products</h2>
          <div class="row border" style="background-color: #6A58AE;color: white;margin-bottom:0.5em;alignment-adjust: central;"> 
          <div class="col border">Product ID</div>
          <div class="col border">Product Name</div>
          <div class="col border">Description</div>
           <div class="col border">Price</div>
            <div class="col border">Action</div>
          </div>
          @foreach($products as $item)
          <div class="row border"> 
          <div class="col border">{{$item['id']}}</div>
          <div class="col border">{{$item['name']}}</div>
          <div class="col border">{{$item['description']}}</div>
           <div class="col border">{{$item['price']}}</div>
            <div class="col border" ><a class="btn " style="margin-left:30%;color:white;background-color: #E5017E;"type="button" href="/product_delete/{{$item['id']}}">Delete Product</a ></div>
            </div>
            @endforeach
            @else
            <p>No Product uploaded </p>
            @endif
            <br />
           <a class="btn btn " style="color:white;background-color:#6A58AE;" href="add_product" type="button" >Add new Product</a >
           </div>
      </div>
    </div> <!-- row1 close here -->
    <hr class="featurette-divider">
    
  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div>
  @endsection