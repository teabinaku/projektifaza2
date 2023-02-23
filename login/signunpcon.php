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

 function insert() {
if(isset($_POST['submit'])){ 
	
	$emri = $_POST['Emri'];
	$mbiemri = $_POST['Mbiemri'];
	$username = $_POST['Username'];
	$email = $_POST['Email'];
	$password=$_POST['Password'];
	$shteti=$_POST['Shteti'];
	$nrtel = $_POST['Nr_Tel'];

$query="INSERT INTO moviepagetable(Emri, Mbiemri,Username,Email,Password,Shteti,Nr_Tel) VALUES('$emri','$mbiemri','$username','$email','$password','$shteti','$nrtel')";
if ($sql = $this->conn->query($query)) {
	echo "<script>alert('records added successfully');</script>";
	echo "<script>window.location.href = 'signuph.php';</script>";
}else{
	echo "<script>alert('failed');</script>";
	echo "<script>window.location.href = 'signuph.php';</script>";
	
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

   ?>





