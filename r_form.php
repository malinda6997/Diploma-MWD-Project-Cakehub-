<?php
$uname=$_POST["uname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

$link=new mysqli ("localhost","root","","cake_hub");

if ($link->connect_error) {
die("Connection failed: ");
}
$query="insert into register_form(uname ,email ,phone ,password ,cpassword)values ('$uname','$email','$phone','$password' , '$cpassword')";
if (mysqli_query($link, $query))
{
echo "New record created successfully";
header('Location:login.php');
}
mysqli_close($link);
?>