<?php
require_once'login/database.php';


class dowloaded{
    public $db;
    public function __construct(){
        $this->db=new database;

    }
    public function readData(){
        $query=$this->db->pdo->query('SELECT* FROM users');
       return $query->fetch();

    }
    public function insert($request){
        $query=$this->db->pdo->prepare('INSERT INTO users(emri,mbiemri,username,email,password,shteti,nrtel) VALUES(:emri,:mbiemri,:username,:email,:password,:shteti,:nrtel)');

        $query->bindParam(':emri',$request['emri']);
        $query->bindParam(':mbiemri',$request['mbiemri']);
        $query->bindParam(':username',$request['username']);
        $query->bindParam(':email',$request['email']);
        $query->bindParam(':password',$request['password']);
        $query->bindParam(':shteti',$request['shteti']);
        $query->bindParam(':nrtel',$request['nrtel']);
        $query->execute();
        
       echo"<script>alert('U BOOOO MAN FUND');</script>";
       






    }


}
?>