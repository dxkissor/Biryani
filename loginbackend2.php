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
   	echo "login success....";
   }
   else
   {
   	 echo "lauaaaa jhaant nai....";
   }
   mysqli_close($con);




?>
