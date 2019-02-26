<?php

  session_start();
   $user = $_SESSION['username'];
   $food_id = $_GET['itemID'];
  
    
   $con=mysqli_connect('localhost','biryani','biryani');
   mysqli_select_db($con,'biryani');
   $query="select * from usertable where username='$user' ";
   $r=mysqli_query($con,$query);
   $n= mysqli_fetch_array($r);

   $phoneno = $n['phoneno'];
   $address = $n['address'];
   $_SESSION['address'] = $address;

   $query1="select * from food where food_id='$food_id' ";
   $r1=mysqli_query($con,$query1);
   $n1= mysqli_fetch_array($r1);
   $food_name = $n1['food_name'];
   $_SESSION['food_name'] = $food_name;

   $price = $n1['price'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Biryaniwale</title>
 	<link rel="stylesheet" type="text/css" href="payment.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="shortcut icon" type="image/x-icon" href="logo.png">
</head>
<body>
 	 <img id="logo" src="logo.png" alt="Biryaniwale" title="Biryaniwale"></a>
	
   <div class="login">
   	<?php 
   	    echo "Name : $user <br>";
   	    echo "phone num : $phoneno <br>";
   	    echo "address : $address <br>";
   	    echo "Item name : $food_name <br>";
   	    echo "Price : $price <br>";
     ?>
   </div>

	<div class="login">
	<form  action="insertorder.php" method="post">
		<h1  style="font-style: italic;">PAYMENT</h1>
			name:  <input type="text" name="username" required><br>
			card no:<input type="text" name="password" maxlength="16" required><br>
			date: <input type="date" name="date" required>
			CVV no:   <input type="text" name="email" required><br>
	<input type="Submit" name="submit" value="pay now"><br>
	</form>
	</div>

	
</body>
</html>