@extends('master')
@section('content')
<style>
 /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
  background-color:gray;
   color:black;"
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 20rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 10rem;
}
  </style>
<main style="margin-top:100px;"> 
  <div class="container marketing">

      <div class="row">
      @foreach($orders as $order)
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>NAME:{{$order->name}}</h2>
        <p>Delivery Status:{{$order->status}}</p>
        <p>Address:{{$order->address}}</p>
        <p>Payment Method:{{$order->payment_method}}</p>
        <p>Payment status:{{$order->payment_status}}</p>
    <hr class="featurette-divider">
    @endforeach
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</main>
@endsection