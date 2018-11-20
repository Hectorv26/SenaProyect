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
<font color="white">
<table width="900" border="0" align="center">
<tr>
<td width="790" height="131"><?php include ("banner.html")?>	
</td>
</tr>
<tr>
<td height="642" align="center" bgcolor="transparent"><form class="form-hotizontal"  name="form-hotizontal" method="post" action="">
<p>
<label for="numerodocumento_pro"></label>
</p>
    

      <table width="820" border="0" align="center" class="fondotabla">
		<tr>
   		 <td  width="130" height="640"  border="0"  align="center">
		   <p>REGISTRO DE PROVEEDORES</p>
		   <br>
		   <br>
      <p><?php
	  class Registro 
	  {
		public function Registrar ($representante,$empresa,$contrasena_pro,$numerodocumento_pro,$tipodocumento_iddocumento )
		  { 
			 include ('conexion.php');
			 // consultar usuario existente
			 $existencia=0;
			  $sql = "SELECT * FROM proveedor where numerodocumento_pro='$numerodocumento_pro'";
					 if( !$result = $db->query($sql))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row = $result->fetch_assoc())
						{
						$ddocumento=stripslashes($row["numerodocumento_pro"]);				
						$existencia=$existencia+1;
						}	 
			 // 
			 if ($existencia=="0")
			 {
		 $sql2 = "INSERT INTO  proveedor (idproveedor,representante,empresa,contrasena_pro,numerodocumento_pro,tipodocumento_iddocumento) VALUES (NULL,'$representante','$empresa',$contrasena_pro,'$numerodocumento_pro','$tipodocumento_iddocumento')";
		 if( !$result2 = $db->query($sql2))
		 					{
						die ('No conecta ['.$db->error.']');
						 } 
			echo '<center>"proveedor registrado"</center>';  
		  }
		  if ($existencia!="0")
		  		{
			  echo'<center>"NO SE PUEDE REGISTRAR"</center>';
			  }		  
		}	
	  }
	   
	$nuevo=new Registro();	
	$nuevo->Registrar($_POST["representante"],$_POST["empresa"],$_POST["contrasena_pro"],$_POST["numerodocumento_pro"],$_POST["tipodocumento_iddocumento"])
	  	  ?>    
        
	</p>  



      </td>
    </tr>  
</table>
</form>
</font>  
</td>
</tr>
<tr>
<td height="43"><?php include ("footer.html")?>
</td>
</tr>
</table>
</body>
</html>