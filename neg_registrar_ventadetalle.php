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
    <td height="642" align="center" bgcolor="transparent"><form id="form1" name="form1" method="post" action="">
      <p>
        <label for="documento"></label>
        </p>
      <p>&nbsp;</p>
      <p> REGISTRAR LAS VENTAS</p>
      <p>
      <?php
	  class ventadetalle
	  { 
		public function factura ($cantidad_venta,$formadepago_idformadepago,$venta_idventa,$producto_idproducto)  
		  { 
			 include ('conexion.php');

			 // consultar usuario existente
			 {
		 $sql2 = "INSERT INTO  detalle_venta (iddetalle_venta,cantidad_venta,formadepago_idformadepago,venta_idventa,producto_idproducto) VALUES (NULL,'$cantidad_venta','$formadepago_idformadepago','$venta_idventa','$producto_idproducto')";
		 if( !$result2 = $db->query($sql2))
		 					{
						die ('No conecta ['.$db->error.']');
						 } 
			echo "detalle registrado";  
		  }		  
		}	
	  }
	  
	   
	$nuevo = new ventadetalle();	
	$nuevo->factura( $_POST["cantidad_venta"],$_POST["formadepago_idformadepago"],$_POST["venta_idventa"],$_POST["producto_idproducto"])
	  	  ?>    
        
      </p>
     
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