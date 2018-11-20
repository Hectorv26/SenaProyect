<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/estilonovillo.css" rel="stylesheet" type="text/css" media="all" />
<title>Restaurante el novillo de oro</title>
<style type="text/css">

</style>
</head>

<body>
<table  width="900" border="0" align="center">
  <tr>
    <td width="790" height="131"><?php include ("banner.html")
    ?></td>
  </tr>
  <tr>
    <td height="642" align="center" class="fondotabla" "><form class="form-hotizontal"  name="form-hotizontal" method="post" action="">
      <p>
        <label for="numerodocumento"></label>
        </p>
      
      <font color="white"><center><p>REGISTRO DE USUARIOS</p></center>

      <p><?php
	  class Registro 
	  {
		public function Registrar ($nombre,$apellido,$telefono,$direccion,$email,$numerodocumento,$contrasena,$genero_idgenero,$fk_id_rol_idrol,$tipodocumento_iddocumento )
		  { 
			 include ('conexion.php');
			 // consultar usuario existente
			 $existencia=0;
			  $sql = "SELECT * FROM persona WHERE numerodocumento ='$numerodocumento'";
					 if( !$result = $db->query($sql))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row = $result->fetch_assoc())
						{
						$ddocumento=stripslashes($row["numerodocumento"]);				
						$existencia=$existencia+1;
						}	 
			 // 
			 if ($existencia=="0")
			 {
		 $sql2 = "INSERT INTO  persona (idpersona,nombre,apellido,telefono,direccion,email,numerodocumento,contrasena,genero_idgenero,fk_id_rol_idrol,tipodocumento_iddocumento) VALUES (NULL,'$nombre','$apellido','$telefono','$direccion','$email','$numerodocumento','$contrasena','$genero_idgenero','$fk_id_rol_idrol','$tipodocumento_iddocumento')";
		 if( !$result2 = $db->query($sql2))
		 					{
						die ('No conecta ['.$db->error.']');
						 } 
			echo "<center>usuario registrado</center>";  
		  }
		  if ($existencia!="0")
		  		{
			  echo "<center>No se puede registrar</center>";

			  }		  
		}	
	  }
	   
	$nuevo=new Registro();	
	$nuevo->Registrar($_POST["nombre"],$_POST["apellido"],$_POST["telefono"],$_POST["direccion"],$_POST["email"],$_POST["numerodocumento"],$_POST["contrasena"],$_POST["genero_idgenero"],$_POST["fk_id_rol_idrol"],$_POST["tipodocumento_iddocumento"])
	  	  ?>    
        
      </p>
      <p>&nbsp;</p></font>
     
    </form>
    <center><a href="reg_usuarios.php" class="btn btn-danger role"  aria-pressed="true">Volver a Registrar</a></center><br>
    <center><a href="index_aplicativo.php" class="btn btn-danger role"  aria-pressed="true">Salir</a></center>
   
    <p></p></td>
  </tr>
  <tr>
    <td height="43"><?php include ("footer.html")
    ?></td>
  </tr>
</table>
</body>
</html>