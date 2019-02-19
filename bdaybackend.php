<?php

$n =$_POST['name'];
$mob =$_POST['mobileno'];
$alt =$_POST['alternateno'];
$dob =$_POST['DOB'];
$anda =$_POST['aniversarydate'];
$add =$_POST['address'];
$s =$_POST['state'];
$c =$_POST['city'];
$p =$_POST['pincode'];

$conn=mysqli_connect('localhost','biryani','biryani');
mysqli_select_db($conn,'biryani');

$query="insert into party(name,mob_no,alt_no,DOB,aniversarydate,address,state,city,pincode) values('$n','$mob','$alt','$dob','$anda','$add','$s','$c','$p')";

mysqli_query($conn,$query);
mysqli_close($conn);




?>