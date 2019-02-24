<?php
$u =$_POST['username'];
$p =$_POST['password'];

$con=mysqli_connect('localhost','biryani','biryani');
   mysqli_select_db($con,'biryani');
   $query="select * from usertable where username='$u' and password='$p'";
   $r=mysqli_query($con,$query);
   $n= mysqli_num_rows($r);
   if($n==1)
   {
   	header('location:http://localhost/Biryani/home.php');
   }
   else
   {
   	 header('location:http://localhost/Biryani/login.php');
   }
   mysqli_close($con);




?>
