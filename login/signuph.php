
<?php
require('signunpcon.php');
session_start();
if(isset($_SESSION['user'])){
	header("location:index.php");
}
if(isset($_REQUEST['submit1'])){
	$emri=$_REQUEST['emri'];
	$mbiemri=$_REQUEST['mbiemri'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$nrtel=$_REQUEST['nrtel'];
	$email=$_REQUEST['email'];
	$shteti=$_REQUEST['shteti'];
	$tipi=$_REQUEST['tipi'];

	if(empty($emri)){
		$errorMsg[0][1]='Name required'
	}


	
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
	<form action="./signupcon.php">
		<button class="fonti">Sign up</button>
	</form>
	</div>
	
		<div class="imgcontainer">
			<span id="login">Sign up</span>
			<img src="5087579.png" >

		
			<!--
			/*
require('./signunpcon.php');
if(isset($_POST['submit1'])){
	$emri=$_POST['emri'];
	$mbiemri=$_POST['mbiemri'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nrtel=$_POST['nrtel'];
	$email=$_POST['email'];
	$shteti=$_POST['shteti'];
	$tipi=$_POST['tipi'];
	if(!empty($_POST['emri']) && !empty($_POST['mbiemri']) && !empty($_POST['username'])   && !empty($_POST['password'])  && !empty($_POST['nrtel']) && !empty($_POST['email']) && !empty($_POST['shteti']) && !empty($_POST['tipi']) ){
	$p=crud::connect()->prepare('INSERT INTO MOVIEPAGEE(emri,mbiemri,username,password,nrtel,email,shteti,tipi)VALUES(:n,:l,:u,:p,:m,"nr,:e,:sh,:t) ');
   $p->bindvalue(':n',$emri);
   $p->bindvalue(':l',$mbiemri);
   $p->bindvalue(':u',$username);
   $p->bindvalue(':p',$password);
 
   $p->bindvalue(':nr',$nrtel);
   $p->bindvalue(':e',$email);
   $p->bindvalue(':sh',$shteti);
   $p->bindvalue(':t',$tipi);
   $p->execute();

}else{
	header(Location:'indexthjesht.php');
}
}*/-->


<form action="signunpcon.php" method="post">
		<div class="Klasa2">
			<label >Emri:</label>
			<input type="text";name="emri" placeholder="Ju lutem shkruani emrin"  id ="emri" class="kushtet">
            <br>
			<label>Mbiemri:</label>
			<input type="text"; name="mbiemri" placeholder="Ju lutem shkruani Mbiemrin"  id ="mbiemri" class="kushtet">
            <br>
			

			<label>Username:</label>
			
			<input type="username";name="text" placeholder="Ju lutem shkruani username"  id ="email" class="kushtet">
            <br>
			<label>Email:</label>
			<input type="email";name="email" placeholder="Ju lutem shkruani emailen tuaj"  id ="email" class="kushtet">
            <br>
            
			<label>Password:</label>
			<input type="password";name ="password" placeholder="Ju lutem shkruani passwordin" id="password" class="kushtet">
            <br>
			
			<label>Shteti:</label>
			<select name="shteti" id="shteti" class="kushtet">
				<option value = "Kosova"> Kosova </option>
				<option value = "Albania"> Albania </option> 
				<option value = "Albania"> Germany</option> 
				<option value = "Albania"> France</option> 
			  </select>
            <br>
			<label>Nr.tel:</label>
			<input name="nrtel";type="tel" placeholder="Ju lutem shkruani numrin kontaktues"  id ="nrtel" class="kushtet">
			<br>
			
            <div class = "login"> 
			<button name="submit1";type ="submit" >Sign Up </button>
			<br>

			</form>
			<form action="../MainpageTHjesh/indexthjesht.php">
			<button  name="submit"type ="submit" >Vazhdo si perdorues i thjeshte </button>
            </form>
			</div>

			
           
		
			
			
            </div>
		

	
</div>
</form>



</body>



</html>

	


