<?php
require_once 'enlace/conector.php';

class Personas extends Conexion{
	
    private $idformContacto;
    private $datosContacto;
    private $telefono;
    private $especialidad;
    private $email;
    private $archivo;
    private $mensaje;
    private $idadminliv;


public function __construct(){
parent::__construct();
}

public function getDatosContacto() {
        return $this->datosContacto;
}
 
public function setDatosContacto($datosContacto) {
        $this->datosContacto =$datosContacto;
}

public function getIdformContacto() {
        return $this->idformContacto;
}
 
public function setIdformContacto($idformContacto) {
        $this->idformContacto=$idformContacto;
}  


public function getTelefono(){
        return $this->telefono;
}

   
 public function setTelefono($telefono){
       $this->telefono = $telefono;
    }

 public function getEspecialidad(){
        return $this->especialidad;
    }

 public function setEspecialidad($especialidad){
      $this->especialidad = $especialidad;
   }

  
 public function getEmail(){
        return $this->email;
   }

   
 public function setEmail($email){
      $this->email = $email;
   }

  
 public function getArchivo(){
      return $this->archivo;
  }

  
 public function setArchivo($archivo){
     $this->archivo = $archivo;
  }

  
 public function getMensaje(){
        return $this->mensaje;
  }

   
 public function setMensaje($mensaje){
    $this->mensaje = $mensaje;
  }

  
  public function getIdadminliv(){
        return $this->idadminliv;
  }

  public function setIdadminliv($idadminliv){
    $this->idadminliv = $idadminliv;
  }


public function agregar(){
    $sql="INSERT INTO formliv(datosContacto,telefono,especialidad,email,archivo,mensaje,idadminliv)
  VALUES('{$this->datosContacto}','{$this->telefono}','{$this->especialidad}','{$this->email}','{$this->archivo}','{$this->mensaje}','{$this->idadminliv}')";
   $guardar=$this->con->query($sql);
   return $guardar;
}

public function getAll(){
    $sql="SELECT idformContacto,datosContacto,telefono,especialidad,email,archivo,mensaje FROM formliv";
    $obtener=$this->con->query($sql);
    $users=$obtener->fetch_all(MYSQLI_ASSOC);
    return $users;
}



}
?>