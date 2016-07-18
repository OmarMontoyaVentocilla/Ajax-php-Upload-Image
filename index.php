<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo</title>
<link href="css/estilo.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myjava.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<form id="subida" data-toggle="validator" role="form">

    <div class="form-group">
     <label for="datosContacto" class="col-lg-5 control-label" >DATOS CONTACTO:</label>
     <div class="col-lg-5">
    <input type="text" class="form-control"  id="datosContacto" name="datosContacto" data-error="Los datos son necesarios" required/>
      <div class="help-block with-errors"></div>  
     </div>
    </div>  
     <br><br><br>
     <div class="form-group">
     <label for="telefono" class="col-lg-5 control-label">TELEFONO:</label>
     <div class="col-lg-5">
     <input type="number" min="1" id="telefono" class="form-control" name="telefono" data-error="El telefono es requerido" required/> 
     <div class="help-block with-errors"></div>  
     </div>
     </div>
    <br><br><br>
    <div class="form-group">
    <label for="especialidad" class="col-lg-5 control-label">ESPECIALIDAD:</label>
      <div class="col-lg-5">
        <select id="especialidad" name="especialidad" class="form-control" required>
        <option disabled selected>--Especialidad--</option>
        <option value="Diseñador Grafico">Diseñador Grafico</option>
        <option value="Diseñador Social Media">Diseñador Social Media</option>
        <option value="Analista de Marketing">Analista de Marketing</option>
        <option value="Ejecutivo de Cuentas">Ejecutivo de Cuentas</option>
        <option value="Diseñador Web">Diseñador Web</option>
        <option value="Programador">Programador</option>
        <option value="Community Manager">Community Manager</option>
        </select>  
     </div>
    </div>
<br><br><br>

    <div class="form-group">
        <label for="email" class="col-lg-5 control-label" >E-MAIL:</label> 
       <div class="col-lg-5">
           <input type="email" name="email" id="email" class="form-control" data-error="El email esta mal escrito" required>
       <div class="help-block with-errors"></div>    
       </div>
    </div>
     <br><br><br>
      <div class="form-group">
     <label for="mensaje" class="col-lg-5 control-label">MENSAJE:</label>
        <div class="col-lg-5">
        <textarea id="mensaje"  name="mensaje" type="text" class="form-control" data-error="Mandanos un mensaje" placeholder="Ingrese su mensaje de su foto..." required></textarea>    
          <div class="help-block with-errors"></div>  
        </div>  
      </div> 
    <br><br><br>
    <div class="form-group">
        <label for="foto" class="col-lg-5 control-label">ARCHIVOS:</label>
        <div class="col-lg-5">
        <input type="file" id="foto" name="foto"/>    
        </div>
    </div>
   <br><br><br>

  <input type="text" name="idAdmin" id="idAdmin" value="1" style="display:none;">
  <input type="submit" class="btn btn-primary" value="Insertar"/>
 <br>    
<img src="recursos/cargando.gif" class="cargando" id="cargando"/>
</form>
<ul class="fotos" id="fotos"></ul>
</div>
<script type="text/javascript" src="js/validator.js"></script>
</body>
</html>



