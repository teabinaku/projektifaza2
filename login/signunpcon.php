<?php
include 'signuph.php';

$servername = "localhost";
 $username = "root";
 $password ;
$database = "userssignup";


$conn = mysqli_connect($localhost, $username, $password, $userssignup);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


/*$conn=mysql_connect("localhost","root","","data");

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

-->

<?php
/*

 class crud{
	public static function connect(){
		try{

		
		$con=new PDO('mysql:localhost=host;dbname=CRUD','root','');
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

 function fetch(){
	$data = null;
	$query = "SELECT * FROM moviepagetable";
	if ($sql = $this->conn->query($query)) {
		while ($row = mysqli_fetch_assoc($sql)) {
			$data[] = $row;
		}
	}
	return $data;
}
*/





   ?>


