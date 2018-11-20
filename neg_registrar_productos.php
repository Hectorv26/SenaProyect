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
</head>

<body>
<?php include('banner.html');
?>
<font color="white">
<table width="900" border="0" align="center">
  <tr>
    <td height="642" align="center" bgcolor="black">
     <form id="form1" name="form1" method="post" action="index2.html">
      <p>
        <label for="documento"></label>
        </p>
         <p>REGISTRAR PRODUCTOS</p>
          <p>
          	<?php
	  class producto
	  {
		public function productos ($nombre_producto,$precio_producto,$categoria_idcategoria)  
		  { 
			 include ('conexion.php');
			 // consultar usuario existente
			 $existencia=0;
			  $sql = "SELECT * FROM producto WHERE idproducto='iddproducto' ";
					 if( !$result = $db->query($sql))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row = $result->fetch_assoc())
						{
						$iddproducto=stripslashes($row["idproducto"]);		
						$existencia=$existencia+1;
						}	 
			 // 
			 if ($existencia=="0")
			 {
		 $sql2 = "INSERT INTO  producto (idproducto,nombre_producto,precio_producto,categoria_idcategoria) 
		 VALUES (NULL,'$nombre_producto','$precio_producto','$categoria_idcategoria')";
		 if( !$result2 = $db->query($sql2))

	
		 				{
						die ('No conecta ['.$db->error.']');
						 } 

			echo "producto registrado";  
		  }
		  if ($existencia!="0")
		  		{
			  echo"el producto No se puede registrar";
			   }		  
		     }	
	       } 
	$nuevo = new producto();	
	$nuevo->productos( $_POST["nombre_producto"],$_POST["precio_producto"],$_POST["categoria_idcategoria"])
	  	  ?>    
       
      </p>
 
    </form>
 
    <p><a href="listar_productos.php" class="btn btn-danger role"   aria-pressed="true">lista de productos</a></p>
   
  </tr>
  </tr>
</table>
<?php include('footer.html');
?>
</font>
</body>
</html>