


 <!--



 $host="localhost";
 $user="root";
 $password="";
 $db="demo";

 mysql_connect($host,$user,$password);
 mysql_select_db($db);

 if(isset($_POST['submit'])){
    $emri=$_POST['emri'];
 $mbiemri=$_POST['mbiemri'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $shteti=$_POST['shteti'];

$sql="Select * from moviepagetable where emri='".$emri."'AND PASS='".$password"'limit1";

$result=mysql_query($sql);
if(mysql_num_rows($result)==1){
    echo'You have access to the main page';
    exit();


   
 }else{
    echo'You do not have access to the main page';
 }


$conn=mysql_connect("localhost","root","","data");

require'signunp.php';

if(isset($_POST['submit'])){ 
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$shteti = $_POST['shteti'];
	$mbiemri=$_POST['mbiemri'];
	$emri=$_POST['emri'];
}
$query="INSERT INTO moviepagetable VALUES('$emri, $mbiemri,$username, $password,$email,$shteti,$tipi');
mysqli_query($conn,$query);
echo'uboooo';






 class crud{
	public static function connect(){
		try{

		
		$con=new PDO('mysql:localhost=host;dbname=CRUD','sa','');
		return $con;
		}catch(PDOexception $error1){
			echo'Something went wrong ->Database error '.$error1->getMessage();
		}catch(Exception $error2){
			echo'Something went wrong ->'.$error2->getMessage();
		}
	}

}


Class dbCon{
private $conn = null;
private $host = 'localhost';
private $dbname = 'crudtest';
private $username = 'sa';
private $password = 'CRUD';
public function connDB(){
try {
$this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
$this->username, $this->password,
[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
//echo "Lidhja me: {$this->dbname} - {$this->host}: eshte ralizuar me sukses!";
} catch (PDOException $pdoe) {
 die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
}
return $this->conn;
}
}
----------------
$emri=filter_input(INPUT_POST,'emri');
$mbiemri=filter_input(INPUT_POST,'mbiemri');
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$email=filter_input(INPUT_POST,'email');
$shteti=filter_input(INPUT_POST,'shteti');
$nrtel=filter_input(INPUT_POST,'nrtel');

if(!empty($username)){
	if(!empty($password)){
		if(!empty($username)){
			if(!empty($password)){
				if(!empty($email)){
					if(!empty($shteti)){
						if(!empty($nrtel)){
						$host='localhost';
						$dbusername="root";
						$dbpassword="";
						$dbname="CRUD";

						
						$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
						if(mysqli_connect_error()){
							die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
						}else{
							$sql = "INSERT INTO MOVIEPAGEE (`username`,`password`,`email`,`shteti`,`nrtel`) VALUES (' $username ','$password',' $email',' $shteti ',' $nrtel ');";
						if($conn->quer($sql)){
							echo'New record is inserted succesfully';
						}else{
							echo'ERROR'
						
						
						}
						$conn->close();
						
						

						}
					}

				}

		}else{
			echo'Password should not be empty';
		}
		}
	}
}
}






?>

 






			
if (!$connect){
	echo "Connection failed!";
}

?>
?>*/

 $db_host="localhost";
 $db_user="root";
 $db_password="tearoot123";
 $db_name="CRUD";

 try{
	$db=new PDO("mysql:host={$db_host};dbnamea={$db_name},$db_user,$db_password");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::EERMODE_EXCEPTION);
 }catch(PODEXCEPTION $e){
	echo$e->getMessage();
 }
?>


$conn=mysqli_connect("localhost","root","","MOVIEPAGE");

-----------

// Set up a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MOVIEPAGE";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the form has been submitted
if ($_SERVER['submit1'] == "POST") {

  // Get the user input
  $emri=$_POST['emri'];
  $mbiemri=$_POST['mbiemri'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
 $shteti=$_POST['shteti'];
  $nrtel=$_POST['nrtel'];

  
  
  if (mysqli_query($conn, $sql)) {
	$sql = "INSERT INTO users (emri, mbiemri,username,email,password,shteti,nrtel) VALUES('','$emri','$mbiemri','$username','$email','$password','$shteti','$nrtel')";

    echo"<script>alert('data is added man fund more allah');</script>";
    exit();
  } else {
    // Handle the error
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}
*/

$conn=mysqli_connect("localhost","root","","MOVIEPAGE");

<?php
?>






