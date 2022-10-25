<?php

   
    $firstNameError= "";
    $firstNameLength="";
    $lastNameError="";
    $lastNamelength="";
    $fNameError="";
    $fNameLength="";
    $emailId="";
    $password="";
    $address="";
    $gender="";
    $hasError=0;
    
if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["fname"]))
    {
        $firstNameError= "First Name is required";
    }else
    {
        $firstNameError= "your first name is ".$_REQUEST["fname"];
    }
    if(strlen($_REQUEST["fname"])<8)
   {
    $firstNameLength= "; first name is not valid";
    }
    else
    {
        $firstNameLength="; your length is ok";
    }

}

if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["lname"]))
    {
        $lastNameError= "Last Name is required";
    }else
    {
        $lastNameError= "; your last name is ".$_REQUEST["lname"];
    }
    if(strlen($_REQUEST["lname"])<6)
   {
    $lastNamelength= "last name is not valid";
    }
    else
    {
        $lastNamelength=" your length is ok";
    }

}

if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["fathername"]))
    {
        $fNameError= "fathername is required";
    }else
    {
        $fNameError= "Father name is ".$_REQUEST["fathername"];
    }
    if(strlen($_REQUEST["fathername"])<8)
   {
    $fNameLength= "Father name is not valid";
    }
    else
    {
        $NfameLength="father name  length is ok";
    }

}

if(isset($_REQUEST["submit"]))
{
    if (isset($_REQUEST["gender"]))
    {
        $gender= "Succuss";

    }else
    {
        $gender="no radio batton found";
    }
}

if(isset($_REQUEST["submit"]))
{
    if(strtolower($_REQUEST["emailId"]))
    {
        $emailId="enter valid email";
    }
    else
    {
        $emailId="email is ok";
    }
}

if(isset($_REQUEST["submit"]))
{
    if(strtolower($_REQUEST["password"]))
    {
        $password="enter valid password";
    }
    else
    {
        $password="password is correct";
    }
}

if(isset($_REQUEST["submit"]))
{
    if(strtolower($_REQUEST["address"]))
    {
        $address="enter permanent password";
    }
    else
    {
        $address="address is valid";
    }
}

if($hasError==0)
  {

    $existingData=file_get_contents("../labtask2/data.json");
    $existingDatainPHP=json_decode($existingData);

    $myarr=array
    ("First_Name"=>$_REQUEST["fname"],
     "Last_Name"=>$_REQUEST["lname"]
     );

     $existingDatainPHP[]=$myarr;
    $myJsonObj=json_encode($existingDatainPHP,JSON_PRETTY_PRINT);
    file_put_contents("../labtask2/data.json",$myJsonObj);

    $mydata=file_get_contents("../labtask2/data.json");
    $myPHPdata=json_decode($mydata);
    echo"<br>Print From json: ".$myPHPdata[0]->First_Name;
    echo"<br>Print From json: ".$myPHPdata[0]->Last_Name;
  }
  



  

?>