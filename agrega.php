<?php

header("Content-Type: text/html;charset=utf-8");
require_once 'model/personas.php';
$resultado=new Personas();
$contacto =$_REQUEST['datosContacto'];
$telefono=$_REQUEST['telefono'];
$especialidad=$_REQUEST['especialidad'];
$email=$_REQUEST['email'];
$mensaje= $_REQUEST['mensaje'];
$idadminliv=$_REQUEST['idAdmin'];


//esto es para la imagen

$rutaEnservidor='archivo';
$rutaTemporal=$_FILES['foto']['tmp_name'];
$nombreImagen=$_FILES['foto']['name'];
$tamano=$_FILES['foto']['size'];
$tipoArchivo=$_FILES['foto']['type'];
$permitidos=array("application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document");
$rutaDestino=$rutaEnservidor.'/'.$nombreImagen;

$resultado->setDatosContacto($contacto);
$resultado->setTelefono($telefono);
$resultado->setEspecialidad($especialidad);
$resultado->setEmail($email);
$resultado->setMensaje($mensaje);
$resultado->setIdadminliv($idadminliv);

  if(!file_exists($rutaDestino) && in_array($tipoArchivo,$permitidos)){
  $copiado= move_uploaded_file($rutaTemporal,$rutaDestino);
      if($copiado){
           $resultado->setArchivo($rutaDestino);
          $guardar=$resultado->agregar();
         echo "<div class='alert alert-success'>
  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>x</a>
  <strong>Bien!</strong> se recibieron los datos correctamente.
</div>";
        
      }else{
      	   echo "ocurrio un error al mover el archivo";
      }
  }else{
     	 echo "<div class='alert alert-danger'>
  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>x</a>
  <strong>Mal!</strong> $nombreImagen ya existe o el tipo de archivo es incorrecto.
</div>";
}
?>