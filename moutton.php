<!DOCTYPE html>
 <html>
 <head>
 	<title>Biryaniwale</title>
 	<link rel="stylesheet" type="text/css" href="moutton.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="shortcut icon" type="image/x-icon" href="logo.png">
 </head>
 <body>
  	<header >
  		<a href="home.php"><img src="logo.png" alt="Biryaniwale" title="Biryaniwale" ></a>
  		<nav>
  			<ul>
  				
  				<li><a href="#">Offers</a></li>
  				<li><a href="#">Stores</a></li>
  				<li><a href="#">Contacts</a></li>
  				<li><a href="#">About Us</a></li>
  				<li class="active"><a href="#">Download App</a></li>
  			</ul>
  		</nav>
  	</header>
    <div class="banner">
    <img  id="photo" src="kk.jpg" alt="biryani">
   </div>
   <div class="menu">
     <h1 id="heading">MOUTTON</h1>
     <div class="container">
          <div class="box1">
                  <h1>MOUTTON TIKKA</h1>
                  <img  id="chicken" src="chicken.jpg" alt="chicken"><br>
                  <form action="payment.php"><input type="submit" name="itemID" value="m1"></form>
          </div>
          <div class="box1">
                  <h1>MOUTTON BIRYANI</h1>
                  <img  id="moutton" src="moutton.jpg" alt="moutton"><br>
                  <form action="payment.php"><input type="submit" name="itemID" value="m2"></form>
          </div>
          <div class="box1">
                  <h2>MOUTTON KABBAB</h2>
                  <img  id="state" src="state.jpeg" alt="state"><br>
                  <form action="payment.php"><input type="submit" name="itemID" value="m3"></form>
          </div>
          <div class="box1">
                  <h1>MOUTTON HAKKA</h1>
                  <img  id="others" src="others.jpg" alt="others"><br>
                  <form action="payment.php"><input type="submit" name="itemID" value="m4"></form>
          </div>
      </div>
   </div>
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
