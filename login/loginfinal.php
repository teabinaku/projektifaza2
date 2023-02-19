
<?php
require('./signupcon.php');
if(isset($_POST['loginsubmit'])){
	$_SESSION['validate']=false;

}

?>

<!DOCTYPE html>
<html>
	<head>
	<title>WEBMOVIE</title>

	<link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
</head>

<body style="background-color: black;">
	<div id="div1">
		<form action="./loginfinal.php">
		<button class="fonti">Login</button>
	</form>
	<form action="./signuph.php">
		<button class="fonti">Sign up</button>
	</form>
	</div>
	
		<div class="imgcontainer">
			<span id="login">Login In</span>
			<img src="5087579.png" >
			

		<div class="Klasa2">
			
			
<form action="signupconfinal.php" method="POST">
			<label>Username:</label>
			
			<input type="text" placeholder="Ju lutem shkruani username"  id ="email" class="kushtet">
            <br>
            
			<label>Password:</label>
			<input type ="password" placeholder="Ju lutem shkruani passwordin" id="password" class="kushtet">
           
           
	<div class = "login"> 
		
			<button id="loginsubmit"type ="submit" >Login In </button>
			<br>
			</form>
			<form action="../MainpageTHjesh/indexthjesht.php">
			<button  name="submit"type ="submit" >Vazhdo si perdorues i thjeshte </button>
            </form>
		 
			</div>
			
            </div>
		</form>

	
</div>

