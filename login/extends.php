<?php
require('signunpcon.php');
Class crudModeli extends dbCon{
private $id;
private $emri;
private $mbiemri;
private $username;
private $password;
private $shteti;
private $nrtel;
private $dbConn;
public function __construct($id='',$emri='',$mbiemri='',$departamenti='',$adresa='')
{
$this->id = $id;
$this->emri = $emri;
$this->mbiemri = $mbiemri;
$this->password=$password;
$this->username=$username;
$this->email=$email;
$this->shteti= $shteti;
$this->nrtel= $nrtel;
$this->dbConn = $this->connDB();
}
public function setId($id){
	$this->id = $id;
	}
	
public function getId(){
	return $this->id;
	}
public function setEmri($emri){
	$this->emri = $emri;
	}
public function getEmri(){
return $this->emri;
}
public function setMbiemri($mbiemri){
	$this->mbiemri = $mbiemri;
}
public function getMbiemri(){
	return $this->mbiemri;
}
public function setUsername($username){
	$this->username=$username;
}
public function getUsername(){
	return $this->username;
}
public function setPassword($password){
	$this->password=$password;
}
public function getPassword(){
	return $this->password;
}
public function setEmail($email){
	$this->email=$email;
}
public function getEmail(){
	return $this->email;
}
public function setShteti($shteti){
	$this->shteti=$shteti;
}
public function getShteti(){
	return $this->shteti;
}
public function getNrtel(){
	return $this->nrtel;
}
public function setNrtel($nrtel){
	$this->nrtel= $nrtel;
}
/////////insertimi i te dhenave 
public function insertoDhenat(){
	try{
	$sql = "INSERT INTO MOVIEPAGEE(emri,mbiemri,username,password,shteti) value(?,?,?,?)";
	$stm = $this->dbConn->prepare($sql);
	$stm->execute([$this->emri, $this->mbiemri, $this->username, $this->password,$this->email,$this->shteti,$this->nrtel]);
	echo "<script>
	alert('dhenat jane Regjistruar me sukses');
	document.location='index.php';</script>";
	}
	catch(Exception $e){
	return $e->getMessage();
	}
	}

}
?>