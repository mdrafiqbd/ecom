<?php

 require_once __DIR__."/../../config.php";
 
$name = $_POST['user_name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$pass =$_POST['password'];
$roll =$_POST['role'];

$insert = "INSERT INTO users (name,email,phone,password,role) VALUES ('$name','$email','$phone','$pass','$roll')";
$qry = $conn->query($insert);
if ($qry){
    header("location: ../../users");
}
?>