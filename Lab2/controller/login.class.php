<?php
class LoginUser{
   private $username;
   private $password;
   public $error;
   public $success;
   private $storage = "../data.json";
   private $stored_users;
 
   public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password;
      $this->stored_users = json_decode(file_get_contents($this->storage), true);
      $this->login();
   }
 
   private function login(){
      foreach ($this->stored_users as $user) {
         if($user['username'] == $this->username){
            if(password_verify($this->password, $user['password'])){  // password_verify function is for encripted hashed password
               session_start();
               $_SESSION['user'] = $this->username;
               $_SESSION['email'] = $user['email'];
               $_SESSION['phone'] = $user['phone'];
               $_SESSION['gender'] = $user['gender'];
               header("location: ../views/dashboard.php");
               exit();
            }
         }
      }
      return $this->error = "Wrong username or password";
   }
}