
<?php
require_once'login/dowloaded.php';

$dowload=new dowloaded;
if(isset($_POST['submit1'])){
	$dowload->insert($_POST);
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
			<span id="login">Sign up</span>
			<img src="5087579.png" >

		

<form  method="POST">
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

	


