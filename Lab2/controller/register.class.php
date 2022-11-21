<?php

class RegisterUser{
   private $username;  
   private $email;
   private $phone;
   private $gender;
   private $raw_password;
   private $encrypted_password;
   public $error;
   public $success;
   private $storage = "data.json";
   private $stored_users; // array
   private $new_user; // array

   public function __construct($username, $email, $phone, $gender, $password){
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
        $this->gender = $gender;
        $this->raw_password = $password;
        $this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);
        $this->stored_users = json_decode(file_get_contents($this->storage), true);
        $this->new_user = [
            "username" => $this->username,
            "email" => $this->email,
            "phone" => $this->phone,
            "gender" => $this->gender,
            "password" => $this->encrypted_password,
        ];

        if($this->checkFieldValues()){
            $this->insertUser();
        }
    }

    private function checkFieldValues(){
        if(empty($this->username) || empty($this->raw_password)){
           $this->error = "Username or Password fields are required.";
           return false;
        }else{
           return true;
        }
     }

     private function usernameExists(){
        foreach ($this->stored_users as $user) {
           if($this->username == $user['username']){
              $this->error = "Username already taken, please choose a different one.";
              return true;
           }
        }
        return false;
     }

     private function insertUser(){
        if($this->usernameExists() == FALSE){
           array_push($this->stored_users, $this->new_user);
           if(file_put_contents($this->storage, json_encode($this->stored_users))){
              return $this->success = "Your registration was successful";
           }else{
              return $this->error = "Something went wrong, please try again";
           }
        }
     }

}