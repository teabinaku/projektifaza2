<?php
require("signup.html");

class Klient{
    public $user;
    public $pass;
    public $email;
    public $nrtel;
    public $mosha;
    public $shteti;

  function__contruct($user,$pass,$email,$nrtel,$mosha,$shteti){
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
?>