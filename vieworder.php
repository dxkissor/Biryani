<!DOCTYPE html>
 <html>
 <head>
 	<title>Biryaniwale</title>
 	<link rel="stylesheet" type="text/css" href="vieworder.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="shortcut icon" type="image/x-icon" href="logo.png">
 </head>
 <body>
	<?php 

        $conn = mysqli_connect('localhost','biryani','biryani');
        mysqli_select_db($conn,'biryani');
    
        $qu="";
        $result = mysqli_query($conn,$qu);
        $num = mysqli_num_rows($result);     
    ?>

 	<div class="header">
		<div><img src="logo.png" alt="logo" class="logo"></div>
		<div><h1><u>View Order</u></h1></div>
 	</div>
	<section>
		<div class="Options">
         <div id="opt1" onclick="window.location='vieworder.php';"><h2>View Orders</h2></div>
         <div id="opt2" onclick="window.location='CompelatedOrders.php';"><h2>Completed orders</h2></div>                    
         <div id="opt3" onclick="window.location='Tansection.php;'"><h2>Transection Recorde</h2></div>
         <div id="opt4" onclick="window.location='dishEntry.php';"><h2>Add/View menu</h2></div> </div>
	</section>
	<br>
	<section>
        <div class="Table">
            <table>
                <tr>
                    <th>Order no</th> 
                    <th>order name</th>  
                    <th>user details</th> 
                </tr>
                <?php 
                for($i=0;$i<$num;$i++)
                {
                     $row = mysqli_fetch_array($result);
                ?>
                <tr>
                   <td><?php echo $row['Order_number']; ?></td>
                   <td><?php echo $row['Order_name']; ?></td>
                   <td><?php echo $row['user details']; ?></td>
                </tr>
        <?php
        	}
        ?>

            </table>
       </div>
      </section>
     </body>

</html>