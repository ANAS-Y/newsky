@extends('master')
@section('content')
<div class="container" style="margin-top:60px;">
<div class="row">
    <div class="col-sm-6">
    <img src="{{$product['gallery']}}" alt="product image">
    </div>

    <div class="col-sm-6">
    <a href="/"> Go back </a>
    <h2>{{$product['name']}}</h2>
    <h4>Details: {{$product['description']}}</h4>
    <h3>Price: {{$product['price']}}</h3>
    <br><br>
    
    <form action="/add_to_cart" method="post">
    @csrf
    <input type="hidden" name="id" value = "{{$product['id']}}">
    <button class="btn btn-primary">Add to cart</button>
    </form>
        <button class="btn btn-success">Buy Now</button>
    </div>
</div>
 </div>
@endsection