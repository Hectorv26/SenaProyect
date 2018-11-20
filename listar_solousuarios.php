<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 


<title>Restaurante el novillo de oro</title>
<style type="text/css">
#f
	font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>

<body>
<?php
include('banner.html');
?>
<font color="white"><table width="850" border="0" align="center" >

  <tr>
    <td height="642" align="center" class="fondotabla" >
      <p align="center">

      


      	<?php 
class usuario
 {
	 public function listar ()
	 {
		 //session_start();
		 $cont='0';
		 
		 include ('conexion.php');
		 $sql = "SELECT * FROM persona WHERE fk_id_rol_idrol='2' ";
		 if( !$result = $db->query($sql))
		 {
			die ('No conecta ['.$db->error.']');
		 }
		 
		 	
			echo"<table width='80' height='140' class='fondotablas' border='0'>";
			 echo '<tr  bgcolor="#424242">';
        	 echo "<td>ID</td>";
			 echo "<td>Nombre</td>";
         	 echo"<td>Apellido</td>";
         	 echo"<td>Telefono</td>";
          	 echo"<td>direccion</td>";
         	 echo"<td>email</td>";
         	 echo"<td>Documento</td>";
			 echo"<td>Genero</td>";
			 echo"<td>rol</td>";
			 echo"<td>Tipo de Documento</td>";
			  echo"<td>editar</td>";
			   echo"<td>eliminar</td>";
       	     echo "</tr>";
			
			while($row = $result->fetch_assoc())
			{
			$iddpersona=stripslashes($row["idpersona"]);
			$nnombre=stripslashes($row["nombre"]);
			$aapellido=stripslashes($row["apellido"]);
			$ttelefono=stripslashes($row["telefono"]);
			$ddireccion=stripslashes($row["direccion"]);
			$eemail=stripslashes($row["email"]);	
			$ddocumento=stripslashes($row["numerodocumento"]);
			$iddgenero=stripslashes($row["genero_idgenero"]);
			$iddrol=stripslashes($row["fk_id_rol_idrol"]);
			$iddocumento=stripslashes($row["tipodocumento_iddocumento"]);
		
			
			
			
			 //subconsulta
			   $sql1 = "SELECT * FROM genero WHERE idgenero='$iddgenero' ";
					 if( !$result1 = $db->query($sql1))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row1 = $result1->fetch_assoc())
						{
						$ttipogenero=stripslashes($row1["tipo_de_genero"]);
						}	


						///	
			$sql2 = "SELECT * FROM fk_id_rol WHERE idrol='$iddrol' ";
					 if( !$result2 = $db->query($sql2))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row2 = $result2->fetch_assoc())
						{
						$rrol=stripslashes($row2["des_rol"]);
						
						}
          //finsubconsulta
		   //consulta
		   $sql3 = "SELECT * FROM tipodocumento WHERE iddocumento='$iddocumento' ";
					 if( !$result3 = $db->query($sql3))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row3 = $result3->fetch_assoc())
						{
						$ttipodocumento=stripslashes($row3["tipo_de_documento"]);
						}
		  
		  
		  //fun consulta
		  // otra consubta
		      
                
		  
		  // fin de otra consuta
		 
  
		  //consulta productos
		  		echo"<tr >";
         		echo "<td>$iddpersona</td>";
				echo "<td>$nnombre</td>";
          		echo"<td>$aapellido</td>";
          		echo"<td>$ttelefono</td>";
          		echo"<td>$ddireccion</td>";
          		echo"<td>$eemail</td>";
          		echo"<td>$ddocumento</td>";
				echo"<td>$ttipogenero</td>";
				echo "<td>$rrol</td>";
			    echo"<td>$ttipodocumento</td>";
				//editar
				echo "<td>";
				echo "<form id=form1 name=form1 method=post action='modificardatos.php'>";

				echo "<input type='hidden'  name=numerodocumento value=$ddocumento />";

				echo "<input type=submit  name=submit value=editar class='btn btn-warning' />";
      echo "</form>";
	  echo "</td>";
	  
	  //eliminar
	  echo "<td>";
				echo "<form id=form2 name=form2 method=post action='eliminar_usuario.php'>";
				echo "<input type='hidden'  name=numerodocumento value=$ddocumento />";

				echo "<input type=submit  name=submit value=eliminar class='btn btn-danger' />";
      echo "</form>";
	  echo "</td>";
       			echo "</tr>";
      			
			}
			//fin del while
			echo"</table>";
	
	 }//fin del metodo
	 
	 

 }//fin de la clase
 
 $nuevo=new usuario();
 $nuevo->listar();
    ?>

    <br>
    <p><a href="index_aplicativo.php" class='btn btn-danger'>Volver al Inicio</a></p>
      <?php
include('footer.html');
?> 



</p>
  </font></td>
</tr>
</table>
</body>
</html>