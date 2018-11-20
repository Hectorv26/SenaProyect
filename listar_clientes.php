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
<table width="420" border="2" align="center" class="fondotabla">
  <tr>
    <td width="420" height="120"><?php include ("banner.html")
    ?></td>
  </tr>
  <font color="white"><tr>
    <center><td height="420" align="center" >
      <p><br><br>
        <label for="textfield"></label>LISTA DE CLIENTES</p>



        <?php 
 class usuario
 {
	 public function listar ()
	 {
		 //session_start();
		 $cont='0';
		 
		 include ('conexion.php');
		 $sql = "SELECT * FROM clientes";
		 if( !$result = $db->query($sql))
		 {
			die ('No conecta ['.$db->error.']');
		 }
		 
		 	
			echo"<center><table width='40' height='180' class='fondotablas' border='0'></center>";
			 echo '<tr  bgcolor="#424242">';
        	 echo "<td>ID</td>";
			 echo "<td>Nombre</td>";
			 echo "<td>Apellido</td>";
			 echo "<td>Celular</td>";
			 echo "<td>email</td>";
			
       	     echo "</tr>";
			
			while($row = $result->fetch_assoc())
			{
			$iddpersona=stripslashes($row["idclientes"]);
			$nnombre=stripslashes($row["nombre_cliente"]);
			$aapellido=stripslashes($row["apellido_cliente"]);
			$ccelular=stripslashes($row["celular"]);
			$eemail=stripslashes($row["email_cliente"]);
		

  
		  //consulta productos
		  		echo"<tr>";
         		echo "<td>$iddpersona</td>";
				echo "<td>$nnombre</td>";
				echo "<td>$aapellido</td>";
				echo "<td>$ccelular</td>";
				echo "<td>$eemail</td>";
			
       			
				/*//editar
				echo "<td>";
				echo "<form id=form1 name=form1 method=post action='modificardatos.php'>";

				echo "<input type=submit name=submit value=editar />";
      echo "</form>";
	  echo "</td>";
	  //eliminar
	  echo "<td>";
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


    </center>
    	</font>
    	</center>


    	 <br>
     <center><p><a href="index_aplicativo.php" class='btn btn-danger'>Volver al Inicio</a></center>


     <?php
include('footer.html');
?> 
      
      
      </p>
     