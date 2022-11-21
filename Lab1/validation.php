<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $matching_error ='';
  
  if(empty($name)){
    $name_error = "Name field must not empty";
  }
  if(empty($email)){
    $email_error = "Email field must not empty";
  }
  if(empty($phone)){
    $phone_error = "Phone field must not empty";
  }
  if(empty($gender)){
    $gender_error = "Gender field must not empty";
  }
  if(empty($password)){
    $password_error = "Password field must not empty";
  }
  if($confirm_password == ""){
    $confirm_error = "Password Confirmation field must not empty";
  }
  if($password != $confirm_password){
    $matching_error = "Password & Confirm Password must be same!!!";
  }
  else{
    $success_msg = "Registration form submited successfully..";
  }
}

?>