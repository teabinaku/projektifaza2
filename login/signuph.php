

<!DOCTYPE html>
<html>
	<head>
	<title>WEBMOVIE</title>

	<link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
</head>

<body style="background-color: black;">
<?php
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
	$p=crud::connect()->prepare('INSERT INTO MOVIEPAGEE(emri,mbiemri,username,password,nrtel,email,shteti,tipi)VALUES(:n,:l,:u,:p,"nr,:e,:sh,:t) ');
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
	echo'Ju nuk i keni plotesuar te gjitha kushtet!';
}
}

?>

	
	<div id="div1">
	<form action="./loginfinal.php">
		<button class="fonti">Login</button>
	</form>
	<form action="./signuph.php">
		<button class="fonti">Sign up</button>
	</form>
	</div>
	
		<div class="imgcontainer">
			<span id="login">Sign up</span>
			<img src="5087579.png" >

			
<form action="signunpcon.php" method="post">
		<div class="Klasa2">
			<label >Emri:</label>
			<input  name="emri";type="text" placeholder="Ju lutem shkruani emrin"  id ="emri" class="kushtet">
            <br>
			<label>Mbiemri:</label>
			<input name="mbiemri"; type="text" placeholder="Ju lutem shkruani Mbiemrin"  id ="mbiemri" class="kushtet">
            <br>
			

			<label>Username:</label>
			
			<input name="username";type="text" placeholder="Ju lutem shkruani username"  id ="email" class="kushtet">
            <br>
			<label>Email:</label>
			<input name="email";type="email" placeholder="Ju lutem shkruani emailen tuaj"  id ="email" class="kushtet">
            <br>
            
			<label>Password:</label>
			<input name="password";type ="password" placeholder="Ju lutem shkruani passwordin" id="password" class="kushtet">
            <br>
			<label>Mosha:</label>
			<input name="mosha";type="number" placeholder="Ju lutem shkruani moshen tuaj"  id ="mosha" class="kushtet">
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
			<button id="submit1";type ="submit" >Sign Up </button>
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

	


