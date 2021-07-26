@extends('master')
@section('content')
<div class="content form-signin text-center">
  <form action="login" method="POST">
    <i class="bi-person-fill" style="font-size: 4em; color:#6A58AE;"></i>
    <h3 class="h3 mb-3 fw-normal" style=" color:#6A58AE;">Please sign in</h3>
  
    @if(Session::has('message'))
  <div class="alert alert-danger alert-block">
<Strong>{{Session::get('message')['message']}}</Strong>
{{Session::forget('message')}}
</div>
@endif
    @csrf
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name= "password"class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
      <a href="forgot_password" style="text-decoration: none; margin-left:%;color:#E5017E;">Forgot Password</a> <a style="text-decoration: none;margin-left:3%; "href="register">Register</a>
    </div>
    <button class="w-100 btn btn-lg " style="background-color: #6A58AE; color: white;"type="submit">Sign in</button>
      </form>
</div>
@endsection