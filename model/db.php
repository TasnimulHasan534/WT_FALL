<?php
class db{
 
function OpenCon(){
 $conn = new mysqli("localhost","root","","user") 
 
 return $conn;
 }
 function insertUser($conn,$tablename,$clientname,$clientemail,$phoneno,$gender,$password)
 {
    $sqlstr="INSERT INTO $tablename (Name,Email,PhoneNo,Gender,Password) VALUES 
    ('$conn','$tablename','$clientname','$clientemail','$phoneno','$gender','$password' )";

 return $conn->query($sqlstr)
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>