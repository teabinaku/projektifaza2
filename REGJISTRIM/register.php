<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>WEBMOVIE</title>
  <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
</head>
<body style="background-color: black;">
  <div class="header">
  	<h2>Sign in</h2>
  </div>
  <div id="div1">
	<form action="login.php">
		<button class="fonti">Login</button>
	</form>
	<form action="register.php">
		<button class="fonti">Sign up</button>
	</form>
	</div>
	
		<div class="imgcontainer">
			<span id="login">Sign up</span>
			<img src="5087579.png" >

		
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input placeholder="Shkruani username" class="kushtet" type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input placeholder="Shkruani email"class="kushtet" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input placeholder="Shkruani password" type="password" name="password_1" class="kushtet">
  	</div>
  	<div class="input-group">
  	  <label>Konfirmo password</label>
  	  <input placeholder="Shkruani password"type="password" name="password_2" class="kushtet">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sign Up</button>
  	</div>
  	<p>
  		Vazhdo si perdorues i thjeshte? <a href="../MainpageTHjesh/indexthjesht.php">KLIKO KETU</a>
  	</p>
  </form>
</body>
</html>