<?php

require_once 'config.php';


class Conexion{
	
    public $con;

public function __construct(){
 		
$this->con=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if ($this->con->connect_errno) {
      	echo "fallo al conectar la bd".$this->con->connect_errno;
      	return;
      }
   $this->con->set_charset(DB_CHARSET);
}




}







?>