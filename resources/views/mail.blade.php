
<?php 
  function input_check($data){ 
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return($data);
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
$email =  input_check($_POST["email"]);

include_once("connection.php");
            /* Performing SQL query */
    $sql = "SELECT*FROM `vcinformation_ssf` WHERE email ='$email'";
if (!mysqli_query($db_link,$sql)){die("Faild  to check email" . mysqli_error($db_link));}
   $result = mysqli_query($db_link,$sql);
   
if(mysqli_num_rows($result) > 0){
    $fetch =mysqli_fetch_assoc($result);
    $email =$fetch["email"];
    $pw =$fetch["firstName"].$fetch["telephone1"];
    mail(
$email,
"PASSWORD RECOVERY ",
"A Password recovery was successful your Password:".$pw."");

$_SESSION["msg"]= 'Your password was sent to ' .$email. '<br> please check your inbox or sperm';
} else{
    
$sql = "SELECT*FROM `hods_account` WHERE email ='$email'";
if (!mysqli_query($db_link,$sql)){die("Faild  to check email" . mysqli_error($db_link));}
   $result = mysqli_query($db_link,$sql);
   
if(mysqli_num_rows($result) > 0){
    $fetch =mysqli_fetch_assoc($result);
    $email =$fetch["email"];
    $hodID =$fetch["hodID"];
    mail(
$email,
"PASSWORD RECOVERY ",
"A Password recovery was successful your Password:".$hodID."");

$_SESSION["msg"]= 'Your password was sent to ' .$email. '<br> please check your inbox or sperm';
}
$_SESSION["msg"]= ' Email donot exist or not register with any account';

   }
mysqli_close($db_link);
}
 ?>
@extends('master')
@section('content')
<div class="container mb-5" style="margin-top:7%;">
<!-- first div start here-->
<div class="col card p-5" >
<!-- first div title-->
<div class="card-title " >
<h4 style="text-align: center; font-family: fantasy;color:#6A58AE ;">Send Your Message</h4>
@if(count($errors) > 0)
  <div class="alert alert-danger ">
<button type="button" class="close" data-dismiss="alert" >x</button>
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
@if(Session::has('message'))
  <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" >x</button>
<Strong>{{Session::get('message')['message']}}</Strong>
{{Session::forget('message')}}
</div>
@endif
</div>
<div class="jumbotron login-form" id="requestLogin">
<h6 style="text-align: center; font-family: fantasy;color:red ;"></h6>
 <form action="sendemail" method="post">
 @csrf
<div class="form-row mb-3">
<label for="email" class="col-sm-3"><b>Enter Your Email</b></label>
        <div class="col">
<input type="email" value=""class="form-control" placeholder="Enter Email" name="email" required="required" >
</div>       
</div>
<div class="form-row mb-3">
<label for="name" class="col"><b>Enter Your Name</b></label>
<div class="col">
<input type="text" value=""class="form-control" placeholder="Enter Your Name" name="name" required="required">
</div>       
</div>

<div class="form-row mb-3">
<label for="phone" class="col"><b>Enter Your Phone Number</b></label>
<div class="col">
<input type="phone" value=""class="form-control" placeholder="Enter Your Phone Number" name="phone" required="required">
</div>       
</div>

<div class="form-row mb-3">
<label for="message" class="col"><b>Type Your Message</b></label>
<div class="col">
<textarea  class="form-control" name="message" required="required"> </textarea>
</div>       
</div>
    
<div class="form-row">
<button type="submit" class="btn login-btn mb-3" style="color: white; background-color:#6A58AE;">Send</button>
</div>  
</div>
</form>
</div>
<!-- first div closing tag -->
</div>
<!-- Container closing tag-->
</div>
@endsection