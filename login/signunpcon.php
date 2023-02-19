


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

<<<<<<< Updated upstream
?>
*/
=======
<?php
        private $host = 'localhost';
        private $username = 'root';
        private $password;
        private $database = 'movieSignUp';
        private $conn;

        public function __construct(){
            try{
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            }catch(Exception $ex){
                echo 'connection failed' .$ex->getMessage();
            }       
        }
	
		echo '<form method="post" action="signuph.php">
    <input type="text" name="emri" placeholder="Emri">
    <input type="text" name="mbiemri" placeholder="Mbiemri">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="email" name="email" placeholder="Email">
	<input type="text" name= "shteti" plaecholder="Shteti">
	<input type ="number" name = "mosha" placeholder = "Mosha">
	<input type ="number" name = "nr_tel" placeholder = "Nr_Tel">
	<input type ="submit" name="Sign Up" value = "submit">'


        //INSERT, FETCH, EDIT, DELETE

        public function insert(){
            if(isset($_POST['submit'])){

              	
	   $emri = $_POST['emri'];
	   $mbiemri = $_POST['mbiemri'];
	  $username = $_POST['username'];
	  $password= $_POST['password'];
	   $email=$_POST['email'];
	      $shteti=$_POST['shteti'];
		  $mosha = $_POST['mosha'];
		  $nr_tel = $_POST['Nr_Tel'];

                $query = "INSERT INTO moviepagetable(Emri,Mbiemri,Username,Password,Email,Shteti,Mosha,Nr_Tel) VALUES ('$emri','$mbiemri', '$username', '$password', '$email','$shteti', '$mosha','$nr_tel')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('records added successfully');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }else{
                    echo "<script>alert('failed');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }

		?>

	

        
        <!--public function fetch(){
            $data = null;
            $query = "SELECT * FROM moviepagetable";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }*/
 
      /*  public function delete($id){
 
            $query = "DELETE FROM moviepagetable where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }*/
 
       /* public function edit($id){
 
            $data = null;
 
            $query = "SELECT * FROM moviepagetable WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function update($data){
 
            $query = "UPDATE moviepagetable SET name='$data[name]', email='$data[email]', mobile='$data[mobile]', address='$data[address]' WHERE id='$data[id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }
-->
>>>>>>> Stashed changes


<!-- class crud{
	public function connect(){
		try{

		
		$con=new PDO('mysql:localhost;dbname=CRUD','root','');
		return $con;
		}catch(PDOexception $error1){
			echo'Something went wrong ->Database error '.$error1->getMessage();
		}catch(Exception $error2){
			echo'Something went wrong ->'.$error2->getMessage();
		}
	}

}

 
?> -->