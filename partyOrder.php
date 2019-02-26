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
    
        $qu="select * from party";
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
         <div id="opt2" onclick="window.location='partyOrder.php';"><h2>party orders</h2></div>                    

	</section>
	<br>
	<section>
        <div class="Table">
            <table>
                <tr>
                    <th>Name</th> 
                    <th>Mob_no</th>
                    <th>alt_no</th>
                    <th>DOB</th> 
                    <th>aniversarydate</th>
                    <th>address</th>
                    <th>state</th>
                    <th>city</th>
                    <th>pin code</th>
                </tr>
                <?php 
                for($i=0;$i<$num;$i++)
                {
                     $row = mysqli_fetch_array($result);
                ?>
                <tr>
                   <td><?php echo $row['name']; ?></td>
                   <td><?php echo $row['mob_no']; ?></td>
                   <td><?php echo $row['alt_no']; ?></td>
                   <td><?php echo $row['DOB']; ?></td>
                   <td><?php echo $row['aniversarydate']; ?></td>
                   <td><?php echo $row['address']; ?></td>
                   <td><?php echo $row['state']; ?></td>
                   <td><?php echo $row['city']; ?></td>
                   <td><?php echo $row['pincode']; ?></td>
                </tr>
        <?php
        	}
        ?>

            </table>
       </div>
      </section>
     </body>

</html>