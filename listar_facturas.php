<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurante el novillo de oro</title>
<style type="text/css">
#form1 p {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>

<body>
<table width="420" border="0" align="center">
  <tr>
    <td width="420" height="131"><?php include ("banner.html")
    ?></td>
  </tr>
  <tr>
    <td height="420" align="center" >
      <p>
        <label for="textfield"></label>
      LISTA DE FACTURAS</p>
      <p>&nbsp;</p>
      <p><?php 
 class usuario
 {
	 public function listar ()
	 {
		 //session_start();
		 $cont='0';
		 
		 include ('conexion.php');
		 $sql = "SELECT * FROM factura";
		 if( !$result = $db->query($sql))
		 {
			die ('No conecta ['.$db->error.']');
		 }
		 
		 	
			echo"<table width='650' height='250' class='fondotablas' border='0'>";
			 echo '<tr  bgcolor="#B9CEEB">';
        	 echo "<td>ID</td>";
			 echo "<td>Numero factura</td>";
         	 echo"<td>Fecha</td>";
         	 echo"<td>Forma de pago</td>";
          	 echo"<td>Usuario</td>";
			 echo"<td>Menu</td>";
			  /* echo"<td>editar</td>";
			   echo"<td>eliminar</td>";*/
       	     echo "</tr>";
			
			while($row = $result->fetch_assoc())
			{
			$iddfactura=stripslashes($row["idfactura"]);
			$nnumerofactura=stripslashes($row["numero_factura"]);
			$ffecha=stripslashes($row["fecha"]);
			
			$iddformadepago=stripslashes($row["formadepago_idformadepago"]);
			$iddpersona=stripslashes($row["persona_idpersona"]);
			$iddmenu=stripslashes($row["producto_idproducto"]);
			
			
			 //subconsulta		
			$sql2 = "SELECT * FROM formadepago WHERE idformadepago='$iddformadepago' ";
					 if( !$result2 = $db->query($sql2))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row2 = $result2->fetch_assoc())
						{
						$ttipo=stripslashes($row2["tipo_de_pago"]);
						
						}
          //finsubconsulta
		   //consulta
		   $sql3 = "SELECT * FROM persona WHERE idpersona='$iddpersona' ";
					 if( !$result3 = $db->query($sql3))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row3 = $result3->fetch_assoc())
						{
						$nnombre=stripslashes($row3["nombre"]);
						}
		  
		  
		  //fun consulta
		     //consulta
		   $sql4 = "SELECT * FROM producto WHERE idproducto='$iddmenu' ";
					 if( !$result4 = $db->query($sql4))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row4 = $result4->fetch_assoc())
						{
						$nnombre_menu=stripslashes($row4["nombre_producto"]);
						}
		  
		  
		  //fun consulta
		  		echo"<tr>";
         		echo "<td>$iddfactura</td>";
				echo "<td>$nnumerofactura</td>";
          		echo"<td>$ffecha</td>";
       
				echo "<td>$ttipo</td>";
				echo "<td>$nnombre</td>";
				echo "<td>$nnombre_menu</td>";
       			
       			
				//editar
				/*echo "<td>";
				echo "<form id=form1 name=form1 method=post action='modificardatos.php'>";

				echo "<input type=submit name=submit value=editar />";
      echo "</form>";
	  echo "</td>";*/
	  //eliminar
	 /* echo "<td>";
				echo "<form id=form2 name=form2 method=post action='eliminar_usuario.php'>";

				echo "<input type=submit name=submit value=eliminar />";
      echo "</form>";
	  echo "</td>";
       			echo "</tr>";*/
      			
			}
			//fin del while
			echo"</table>";
	
	 }//fin del metodo
	 
	 

 }//fin de la clase
 
 $nuevo=new usuario();
 $nuevo->listar();
    ?>
      
      
      </p>
      <p><a href="listar_usuarios2.php">ir a capa de usuarios 2</a>