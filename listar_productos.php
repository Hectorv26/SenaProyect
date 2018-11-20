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
<?php include('banner.html') ?>
<font color="white"><table width="850" border="0" align="center" >

  <tr>
    <td height="642" align="center" class="fondotabla" >
      <p align="center">
 <?php 
 
 class producto
 {
	 public function productos ()
	 {
		 //session_start();
		 $cont='0';
		 
		 include ('conexion.php');
		 $sql = "SELECT * FROM producto  ";
		 if( !$result = $db->query($sql))
		 {
			die ('No conecta ['.$db->error.']');
		 }
		 
		 	
			 echo"<table width='80' height='140' class='fondotablas' border='0'>";
			 echo '<tr  bgcolor="#424242">';
        	 echo "<td>ID</td>";
			 echo "<td>Producto</td>";
         	 echo"<td>Precio</td>";
         	 echo"<td>Categoria</td>";
			 echo"<td>Editar</td>";
			 echo"<td>Eliminar</td>";
       	     echo "</tr>";
			
			while($row = $result->fetch_assoc())
			{
			$iddproducto=stripslashes($row["idproducto"]);
			$nnombreproducto=stripslashes($row["nombre_producto"]);
			$pprecioproducto=stripslashes($row["precio_producto"]);
			$iddcategoria=stripslashes($row["categoria_idcategoria"]);
			
			
			
			 //subconsulta
          include ('conexion.php');
                 $sql2 = "SELECT * FROM categoria WHERE idcategoria='$iddcategoria' ";
					 if( !$result2 = $db->query($sql2))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row2 = $result2->fetch_assoc())
						{
						$categoria=stripslashes($row2["tipo_categoria"]);
						}
          //finsubconsulta
		  
		   //subconsulta
       
          //finsubconsulta
	
	
	      		echo"<center<tr>";
				echo "<td>$iddproducto</td>";
         		echo "<td>$nnombreproducto</td>";
				echo "<td>$pprecioproducto</td>";
				echo"<td>$categoria</td>";
	
			
          			//editar
				echo "<td>";
				echo "<form id=form2 name=form2 method=post action='modificardatosproducto.php'>";
				echo "<input type=hidden name=id value='$iddproducto' />";
				
				echo "<input type=submit name=submit  class='btn btn-warning' value=editar >";
      echo "</form>";
	  echo "</td>";
       			
	
	  //eliminar
	  echo "<td>";
				echo "<form id=form2 name=form2 method=post action='eliminar_producto.php'>";
				echo "<input type=submit name=submit class='btn btn-danger' value=eliminar >";
      echo "</form>";
	  echo "</td>";
       			echo "</tr>";
			}
			//fin del while
			echo"</table>";
	
	 }//fin del metodo
	 
	 

 }//fin de la clase
 
 $nuevo=new producto();
 $nuevo->productos();
    ?>
      
      
      </p>
      <br>
      <br>
      <br>
      <p><a href="listar_productos.php" class="btn btn-success"   aria-pressed="true">lista de productos</a></p> 

      <?php include('footer.html');
      ?>
     
  </td>
</tr>
</font>
</body>
</html>