<?php include_once ("includes/header.php");
?>
<?php var_dump($_POST)?>
<?php

$expected_password = 'toto';


$password = $_POST['password'];


if ($password== $expected_password) {
    
    echo "Password is correct!";
} else {
   
    echo "Password is incorrect!";
}
?>
<?php
  
  $login = $_POST['login'];

  
  if (($login) && !empty($login)) {
    
    echo "Login value is valid";
  } else {
    
    echo "Please enter a valid login";
  }
?>
<form class="w-75 mx-auto" method="post">
<div class="alert alert-success" role="password">
  A simple success alert—check it out!
</div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="from-label">Login</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="login">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" name="password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

