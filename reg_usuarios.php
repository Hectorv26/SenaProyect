<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/estilonovillo.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Registrar Usuarios</title>

</head>

<body>
<?php
include('banner.html');
?>
 
        <center>
       <font color="white"><h2 >Registro de Usuarios</h2>
	  </center>	  
	  <!-- Formulario !-->
     <div class="container">

  
  <form class="form-horizontal" id="form1" name="form1" method="post" action="neg_registrar_usuarios.php">
      
       
    <div class="form-group">
     <label class="control-label col-sm-2"  for="nombre">Nombre:</label> 
      <div class="col-sm-10">
        <input type="nombre"  class="form-control" id="nombre" placeholder="Ingrese Nombre" name="nombre">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="apellido">Apellido:</label>
      <div class="col-sm-10">
        <input type="apellido" class="form-control" id="apellido" placeholder="ingrese apellido" name="apellido">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefono">Telefono:</label>
      <div class="col-sm-10">
        <input type="telefono" class="form-control" id="telefono" placeholder="Ingrese numero telefonico " name="telefono">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="direccion">Direccion:</label>
      <div class="col-sm-10">
        <input type="direccion" class="form-control" id="direccion" placeholder="Ingrese direccion" name="direccion">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Ingrese correo electronico" name="email">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="numerodocumento">Numero Documento:</label>
      <div class="col-sm-10">
        <input type="numerodocumento" class="form-control" id="numerodocumento" placeholder="ingrese numero de identificacion" name="numerodocumento">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contrasena">Contraseña:</label>
      <div class="col-sm-10">          
        <input type="contrasena" class="form-control" id="contrasena" placeholder="ingrese contraseña" name="contrasena">
      </div>
    </div>   


 <div class="form-group">
      <label class="control-label col-sm-2" for="genero_idgenero">Genero:</label>
      <div class="col-sm-10">
      <select name="genero_idgenero" class="form-control">
        <?php
        
        include ('conexion.php');
                 $sql2 = "SELECT * FROM genero ";
           if( !$result2 = $db->query($sql2))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row2 = $result2->fetch_assoc())
            {
            $iddgenero=stripslashes($row2["idgenero"]);
            $ttipogenero=stripslashes($row2["tipo_de_genero"]);
            echo "<option value =$iddgenero>$ttipogenero</option>";
            }
                
                ?>
                </select></div></div>
   
      <div class="form-group">
      <label class="control-label col-sm-2" for="fk_id_rol_idrol">Rol:</label>
      <div class="col-sm-10">
      <select name="fk_id_rol_idrol" class="form-control">
          <?php
        
        include ('conexion.php');
                 $sql = "SELECT * FROM fk_id_rol ";
           if( !$result = $db->query($sql))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row = $result->fetch_assoc())
            {
            $ffk_id_rol=stripslashes($row["idrol"]);
            $rrol=stripslashes($row["des_rol"]);
            echo "<option value =$ffk_id_rol>$rrol</option>";
            }?>
            </select>
            </div></div>



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

      </div>
    </div>

    <input type="submit" name="button" id="button" value="Registrar usuario"  class="btn btn-danger role=" />
  </form>
</div>
</font>
</center>

<?php include ('footer.html'); 
?>
</body>
</html>
