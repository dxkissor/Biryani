 <!DOCTYPE html>
 <html>
 <head>
 	<title>Biryaniwale</title>
 	<link rel="stylesheet" type="text/css" href="birthday.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="shortcut icon" type="image/x-icon" href="logo.png">
 </head>
 <body>
  	<header>
  		<a href="home.php"> <img src="logo.png" alt="Biryaniwale" title="Biryaniwale"></a>
  		<nav>
  			<ul>
  				<li><a href="menu.html"> Menu</a></li>
  				<li><a href="#">Offers</a></li>
  				<li><a href="#">Stores</a></li>
  				<li><a href="contact.php">Contacts</a></li>
  				<li><a href="about.php">About Us</a></li>
  				<li class="active"><a href="#">Download App</a></li>
  			</ul>
  		</nav>
  	</header>
    </header>
    <div class="banner">
      <img  id="photo" src="birthday.jpg" alt="biryani">
   </div>
      <h2>PARTY</h2>
      <h4>For bookings and Information, Please fill the details below and submit</h4>
      <form action="bdaybackend.php" method="POST" name="myForm">
        <input type="text" name="name" placeholder="name" required>
        <input type="text" name="mobileno"  placeholder="mobile no" required>
        <input type="text" name="alternateno" placeholder="alternate no" required>
        <input class="date" type="date" name="DOB" placeholder="DOB">
        <input class="date" type="date" name="aniversarydate" placeholder="aniversary date" required>
        <input type="text" name="address" placeholder="address" required>
        <input type="text" name="state" placeholder="state" required>
        <input type="text" name="city" placeholder="City" required>
        <input type="text" name="pincode" placeholder="pin code" required> <br>
        <input type="submit" name="ok" value="submit">
      </form>
      <h6>We will contact you within 2 working days. Domino's conduct Birthday Parties in select Restaurant and Times. T&C Apply</h6>
<footer>
      
      <p>&copy; 2019  Nandkishor All Right Reserved</p>
      <div id="social">
       <i class="fab fa-facebook-f" title="follow me" id="facebook"></i>
      <i class="fab fa-twitter fa-2x" title="follow me" id="twitter"></i>
      <i class="fab fa-instagram" title="follow me" id="instagram"></i>
      <i class="fab fa-google-plus" title="follow me" id="google"></i> 
    </div>

</footer>

 </body>
 </html>