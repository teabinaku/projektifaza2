
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

			
<form action="login/signuph.php" method="post">
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
            <label> Tipi i perdoruesit </label>
			<input name = "tipi"; type = "text" placeholder = "Admin/Perdorues i thjeshte" id= "Tipid_ID" class = "kushtet">
           
	<div class = "login"> 
		
			<button name="submit1"type ="submit" >Sign UP </button>
			<br>
         </form>
			<form action="../MainpageTHjesh/indexthjesht.php">
			<button  name="submit"type ="submit" >Vazhdo si perdorues i thjeshte </button>
            </form>
		
			</div>
			
            </div>
		

	
</div>
</form>

<!--
/*
require("signup.html");

class Klient{
    public $user;
    public $pass;
    public $email;
    public $nrtel;
    public $mosha;
    public $shteti;


    this->username=$user;
    this->password=$pass;
    this->email=$email;
    this->nrtel=$nrtel;
    this->shteti=$shteti;
  }
  public function getusername(){
     return this->username=$user;
  }
  public function setusername($newusername){
    this->username=$newusername;
  }

  public function getpassword(){
    return this->password=$pass;

  }
  public function setpassword($newpassword){
    this->password=$newpassword;
  }
  public function getemail(){
    return this->email=$email;

  }
  public function setemail($newemail){
    this->email=$newemail;

  }
  public function getnrtel(){
    return this->email=$email;
  }
  public  function setnrtel($newnrtel){
    this->nrtel=$nrtel;
  }
  public  function  getshteti(){
    return this->shteti=$shteti;
  }
  public function setshteti($newshteti){
    this->shteti=$newshteti;
  }
  public function  toString(){
    return 'Perdoruesi me emer'.$this->username .'-me email'.$this->email;
  }
}
 var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var nrtel = document.getElementById("nrtel").value;
    var shteti = document.getElementById("shteti").value;
    var emri = document.getElementById("emri").value;
    var mbiemri = document.getElementById("mbiemri").value;
    var mosha = document.getElementById("mosha").value;

function signup(){
	if(isset($_POST['submit']) { 
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$shteti = $_POST['shteti'];
	$mbiemri=$_POST['mbiemri'];
	$emri=$_POST['emmri'];
	
	}else{
	  echo'Ju nuk keni shtypur butonin per tu rregjistruar'
	}
	}
	*/
	$host='localhost';
	$user='sa';
	$password="";
	$db='demo';

	mysql_connect($host,$user,$password);
	mysql_select_db($db);
	if(isset($_POST['submit'])){ 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$shteti = $_POST['shteti'];
	$mbiemri=$_POST['mbiemri'];
	$emri=$_POST['emri'];
	
	$sql='Select * from loginform where user='".$emri."' AND password ".$password."limit 1";
	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1){
		echo'You have succesfullu loged in';
		exit();

	
	}else{
		echo'You have not acessed the site'
		}
	}

*/-->
</body>

	


