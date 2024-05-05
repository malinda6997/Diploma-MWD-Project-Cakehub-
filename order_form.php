<?php

   $connection = mysqli_connect('localhost','root','','cake_hub');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $category = $_POST['category'];
      $payment = $_POST['payment'];
      $size = $_POST['size'];
      

      $request = " insert into order_form1(name, email, phone, address, category, payment, size) values('$name','$email','$phone','$address','$category','$payment','$size') ";
      mysqli_query($connection, $request);

      header('location:order.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>