<?php

session_start();
  $food_name = $_SESSION['food_name'];
  $address = $_SESSION['address'];
  

   $con=mysqli_connect('localhost','biryani','biryani');
   mysqli_select_db($con,'biryani');
   $query="insert into orders(order_address,order_name) values('$address','$food_name')";
   mysqli_query($con,$query);
   mysqli_close($con);
   header('location:http://localhost/Biryani/success.php');
?>