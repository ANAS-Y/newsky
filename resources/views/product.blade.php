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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
  @foreach($products as $item)
    <div class="carousel-item {{$item['id']== 1?'active':''}} ">
      <a href="detail/{{$item['id']}}">
      <img src="..." class="d-block w-100 slider-img" alt="{{$item['name']}}">
      <div class="carousel-caption d-none d-md-block" >
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
      </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


   <div class="container-fluid marketing">
    <!-- four columns of text below the carousel -->
    <div class="row">
      <div class="col-sm-2 card  mb-3 me-2">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      <h5 class="card-title">NAME OF PRODUCT OR SERVICES</h5>
      <div class="card-body">       
       <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
        <div class="card-header"><a class="btn btn-secondary" href="#">View details &raquo;</a></div>
      </div><!-- card closign/col -->

      <div class="card col-sm-2 mb-3">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      <h5 class="card-title">NAME OF PRODUCT OR SERVICES</h5>
      <div class="card-body">       
       <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
        <div class="card-header"><a class="btn btn-secondary" href="#">View details &raquo;</a></div>
      </div><!-- card closign/col -->

      <div class="col-sm-2 card  mb-3">
        <img src="img/logo.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
      <h5 class="card-title">NAME OF PRODUCT OR SERVICES</h5>
      <div class="card-body">       
       <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
        <div class="card-header"><a class="btn btn-secondary" href="#">View details &raquo;</a></div>
      </div><!-- card closign/col -->

      <div class="card col-sm-2  mb-3">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      <h5 class="card-title">NAME OF PRODUCT OR SERVICES</h5>
      <div class="card-body">       
       <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
        <div class="card-header"><a class="btn btn-secondary" href="#">View details &raquo;</a></div>
      </div><!-- card closign/col -->

      <div class="card  mb-3">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      <h5 class="card-title">NAME OF PRODUCT OR SERVICES</h5>
      <div class="card-body">       
       <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
        <div class="card-header"><a class="btn btn-secondary" href="#">View details &raquo;</a></div>
      </div><!-- card closign/col -->

    </div><!-- /.row -->
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</main>
@endsection