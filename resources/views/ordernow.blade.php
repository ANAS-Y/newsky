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
    <!-- START THE FEATURETTES -->

    <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Items</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Items total Price</td>
      <td>{{$total}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tax</td>
      <td># 0</td> 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery</td>
      <td># 500</td> 
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Grand Total</td>
      <td># {{$total}}+500</td> 
    </tr>
  </tbody>
</table>
<div>
  <form action="orderplace" method="POST">
  @csrf
  <textarea name="address" id="" cols="90" rows="3" placeholder="Enter Your Address"></textarea><br><br>
  <label for="paymaent"> Payment Method</label><br><br>
  <input type="radio" value="Online" name="payment" > <span>  Online Payment</span><br><br>
  <input type="radio" value="Bank"name="payment" > <span>  Bank payment</span><br><br>
  <button type="submit" class="btn btn-primary">Order Now</button>
  </form>
  </div>
  </div><!-- /.container -->
  

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</main>
@endsection