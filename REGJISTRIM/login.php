<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
  <title>WEBMOVIE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: black;">
  <div class="header">
  	<h2>Login</h2>
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
			<span id="login">Log In</span>
			<img src="5087579.png" >

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input class="kushtet" type="text" name="username" placeholder="Shkruani username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="kushtet" type="password" name="password" placeholder="Shkruani passwordin">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Vazhdo si perdorues i thjeshte? <a href="../MainpageTHjesh/indexthjesht.php">KLIKO KETU</a>
  	</p>
  </form>
</body>
</html>