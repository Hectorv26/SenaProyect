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
<font color="white">
<body>
<center><table width="420" border="2" align="center">
<tr><td width="790" height="131"><?php include ("banner.html")?></td></tr>
     
     <tr>
<td height="80" align="center" border="2">
<form id="form1" name="form1" method="post" action="">
<p><label for="documento"></label></p>
</center>


   <?php


	  class categoria
	  {
		public function categos($tipo_categoria)  
		  { 
			 include ('conexion.php');
			 // consultar usuario existente
			 $existencia=0;
			  $sql = "SELECT * FROM categoria WHERE idcategoria='iddcategoria' ";
					 if( !$result = $db->query($sql))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row = $result->fetch_assoc())
						{
						$iddcategoria=stripslashes($row["idcategoria"]);		
						$existencia=$existencia+1;
						}	 
			 // 
			 if ($existencia=="0")
			 {
		 $sql2 = "INSERT INTO  categoria(idcategoria,tipo_categoria) VALUES (NULL,'$tipo_categoria')";
		 if( !$result2 = $db->query($sql2))
		 					{
						die ('No conecta ['.$db->error.']');
						 } 
			echo '<center>Categoria registrada</center>';  
		  }
		  if ($existencia!="0")
		  		{
			  echo"la categoria No se puede registrar";
			  
			  }		  
		}	
	  }
	  
	   
	$nuevo = new categoria();	
	$nuevo->categos( $_POST["tipo_categoria"])
	  	  ?>    
        
      </p>
     
</form>
</tr>
<tr>
 <td height="43">
   <?php include ("footer.html")
    ?></td>
  </tr>

</font>
</table>
</body>
</html>