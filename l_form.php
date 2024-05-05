<?php
$uname=$_POST["uname"];
$password=$_POST["password"];
$link=new mysqli("localhost","root","","cake_hub");
if ($link->connect_error){
die ("Unable to Connect ". $link->connect_error);
}
$query="select * from register_form where uname='$uname' and password='$password'";

$result=$link->query($query);

if ($result->num_rows > 0){

header('Location:home.php');

}
else {

echo "Login Failed";
header('Location:login.php');

}
?>