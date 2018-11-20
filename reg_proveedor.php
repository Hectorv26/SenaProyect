<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Novillo de Oro</title>
<style>
</style>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/estilonovillo.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Restaurante el novillo de oro</title>
</head>

<body>
<?php
include('banner.html');
?>
 
    
  <br>
  <form id="form1" name="form1" method="post" action="neg_registrar_proveedor.php">
     <font color="white"><p>
        <label for="numerodocumento_pro"></label>
        </p>
       <center>
      <h1 >Registro de Proveedores</h1>

    <br>
    <br>
    </center>   
    <!-- Formulario !-->
     <div class="container">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">
        <input type="representante" class="form-control" id="representante" placeholder="Ingrese Nombre del representante de la empresa" name="representante" required="">
      </div>
    </div>
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="empresa">Empresa:</label>
      <div class="col-sm-10">
        <input type="empresa" class="form-control" id="empresa" placeholder="Ingrese empresa " name="empresa"required="">
      </div>
    </div>
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="contrasena_pro">Contraseña:</label>
      <div class="col-sm-10">          
        <input type="contrasena_pro" class="form-control" id="contrasena_pro" placeholder="ingrese contraseña" name="contrasena_pro"required="">
      </div>
    </div>   
 
      <div class="form-group">
      <label class="control-label col-sm-2" for="numerodocumento_pro">Numero documento:</label>
      <div class="col-sm-10">          
        <input type="numerodocumento_pro" class="form-control" id="numerodocumento_pro" placeholder="ingrese numero documento" name="numerodocumento_pro" required="">
      </div>
    </div> 
   <div class="form-group">
      <label class="control-label col-sm-2" for="tipodocumento_iddocumento">Tipo de documento:</label>
      <div class="col-sm-10">
      <select name="tipodocumento_iddocumento" class="form-control">
          <?php
        
        include ('conexion.php');
                 $sql3 = "SELECT * FROM tipodocumento ";
           if( !$result3 = $db->query($sql3))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row3 = $result3->fetch_assoc())
            {
            $idddocumento=stripslashes($row3["iddocumento"]);
            $ttipodocumento=stripslashes($row3["tipo_de_documento"]);
            echo "<option value =$idddocumento>$ttipodocumento</option>";
            }
                
                ?>
            </select>
            <br><br>
              </div>
               </div> 
                <div align="center">                                
                    <input type="submit" name="button" id="button"  class="btn btn-warning role" value="Registrar proveedor"/>
                        </div>



</div>
</font></form>
<?php include('footer.html');?>
</body>
</html>
