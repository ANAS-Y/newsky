@extends('master')
@section('content')
<div class="content "style="margin-top:100px;">
   <div class="container-fluid">
    <!-- Three columns of text below the carousel -->
    <div class="row">
    @forelse($products as $item)
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>{{$item->name}}</h2>
        <p>{{$item->description}}</p>
        <p>{{$item->price}}</p>
        
        <a class="btn btn-success" href="ordernow">Order Now</a>
        <a href="/removecart/{{$item->cartid}}" class="btn btn-danger">Remove from cart</a>
      </div><!-- /.col-lg-4 -->
      @empty
      <p style="text-align: center;">Your Card is Empty! please add to cart</p>
      @endforelse
    </div><!-- /.row -->


    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</div>
@endsection