@extends('master')
@section('content')
<div class="content">
<div class="container-fluid">
<div class="row align-items-md-stretch"> <!-- row1 start here -->
<div class="card mb-3 border p-5 rounded-3 align-items-md-stretch" style="background-color:#D8E1F3; margin-top:2em;" >
    
    <div class="col text-center" >
    <img  class="rounded d-block mx-auto" width="200" height="200"  src="{{$product['gallery']}}" alt="product image">

    <h2 class="cartheader">{{$product['name']}}</h2>
    <h4 class="cartheader2  rounded-3">Details: {{$product['description']}}</h4>
    <h3 class="cartheader2">Price: {{$product['price']}}</h3>
    <br><br>
    
    <form action="/add_to_cart" method="post">
    @csrf
    <input type="hidden" name="id" value = "{{$product['id']}}">
       
       <input type="submit"class="btn btn-primary mb-3" value="Add to cart">
        <a href="#" class="btn btn-success mb-3">Buy Now </a>
        </form>
    </div>
</div>
 </div>
 </div>
 </div>
@endsection