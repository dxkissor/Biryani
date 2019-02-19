<?php

  $u = $_POST['username'];
  $p = $_POST['password'];
  $g = $_POST['gender'];
  $e = $_POST['email'];
  $pho = $_POST['phoneno'];
  

   $con=mysqli_connect('localhost','biryani','biryani');
   mysqli_select_db($con,'biryani');
   $query="insert into usertable(username,password,gender,email,phoneno) values('$u','$p','g','$e','$pho')";
   mysqli_query($con,$query);
   mysqli_close($con);

?>