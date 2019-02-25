<!DOCTYPE html>
 <html>
 <head>
 	<title>Biryaniwale</title>
 	<link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="shortcut icon" type="image/x-icon" href="logo.png">
 </head>
 <body>
 	 <img id="logo" src="logo.png" alt="Biryaniwale" title="Biryaniwale"></a>
	
	<div class="login">
	<form  action="loginbackend.php" method="post">
		<h1  style="font-style: italic;">SIGNUP</h1>
			name:  <input type="text" name="username"><br>
			password:<input type="password" name="password" maxlength="16"><br>
			gender:  <input type="radio" name="gender" value="M"> male
					 <input type="radio" name="gender" value="F"> female<br>
			email:   <input type="text" name="email"><br>
			phoneno: <input type="phone" name="phoneno"><br>
			Address: <input  id="address" type="text" name="address">
	<input type="Submit" name="submit" value="signup"><br>
	</form>
	</div>
 </body>