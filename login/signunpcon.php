<?php


 /*



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
*/

$conn=mysql_connect("localhost","root","","data");

require'signunpcon.php';

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


?>


 
