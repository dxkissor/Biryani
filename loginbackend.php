<?php

  $u = $_POST['username'];
  $p = $_POST['password'];
  $g = $_POST['gender'];
  $e = $_POST['email'];
  $pho = $_POST['phoneno'];
  $a =$_POST['address'];

   $con=mysqli_connect('localhost','biryani','biryani');
   mysqli_select_db($con,'biryani');
   $query="insert into usertable(username,password,gender,email,phoneno,address) values('$u','$p','$g','$e','$pho','$a')";
   mysqli_query($con,$query);
   mysqli_close($con);
   header('location:http://localhost/Biryani/login.php');
?>