<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Restaurante el novillo de oro</title>
<style type="text/css">

</style>
</head>

<body>
<table width="900" border="0" align="center">
  <tr>
    <td width="790" height="131"><?php include ("banner.html")
    ?></td>
  </tr>
  <tr>
    <td height="642" align="center" bgcolor="#999999"><form id="form1" name="form1" method="post" action="">
      <p>
        <label for="documento"></label>
        </p>
      <p>&nbsp;</p>
      <p> REGISTRAR LAS VENTAS</p>
      <p><?php
	  class venta
	  { 
		public function datos ($fecha,$clientes_idclientes,$persona_idpersona,$persona_genero_idgenero,$persona_fk_id_rol_idrol,$persona_tipodocumento_iddocumento)  
		  { 
			 include ('conexion.php');

			 // consultar usuario existente
			 $existencia=0;
			  $sql = "SELECT * FROM venta WHERE idventa='iddventa' ";
					 if( !$result = $db->query($sql))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row = $result->fetch_assoc())
						{
						$iddventa=stripslashes($row["idventa"]);		
						$existencia=$existencia+1;
						}	 
			 // 
			 if ($existencia=="0")
			 {
		 $sql2 = "INSERT INTO  venta (idventa,fecha,clientes_idclientes,persona_idpersona,persona_genero_idgenero,persona_fk_id_rol_idrol,persona_tipodocumento_iddocumento) VALUES (NULL,'$fecha','$clientes_idclientes','$persona_idpersona,'$persona_genero_idgenero','$persona_fk_id_rol_idrol','$persona_tipodocumento_iddocumento')";
		 if( !$result2 = $db->query($sql2))
		 					{
						die ('No conecta ['.$db->error.']');
						 } 
			echo "venta registrada";  
		  }
		  if ($existencia!="0")
		  		{
			  echo"la venta No se puede registrar";
			  }		  
		}	
	  }
	  
	   
	$nuevo = new venta();	
	$nuevo->datos( $_POST["fecha"],$_POST["clientes_idclientes"],$_POST["persona_idpersona"],$_POST["persona_genero_idgenero"],$_POST["persona_fk_id_rol_idrol"],$_POST["producto_stock_idstock"],$_POST["persona_tipodocumento_iddocumento"])
	  	  ?>    
        
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </form>
    <p>&nbsp;</p>
    <p><a href="capa2.php">ir a capa de registros</a></p>
    <p><a href="salir.php">salir-cerrar sesion</a></p></td>
  </tr>
  <tr>
    <td height="43"><?php include ("footer.html");
    ?></td>
  </tr>
</table>
</body>
</html>