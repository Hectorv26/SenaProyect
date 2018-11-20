<?php 
session_start();


 class Login
 {
	 public function evaluar ($contrasena_pro,$numerodocumento_pro)
	 {

		 $cont='0';
		 include ("conexion.php");
		 
		 $sql = "SELECT * FROM proveedor WHERE numerodocumento_pro='$numerodocumento_pro'";

		 /*$sql2="select id genero , genero, 
		 from genero
		 inner join garage on genero.genero_idgenero =genero.idgenero
		 inner join ciudad on vehiculo.ciudad_idciudad =ciudad.idciudad"*/
		 if(!$result = $db->query($sql))
		 {
			die ('No conecta ['.$db->error.']');
		 }
			while($row = $result->fetch_assoc())
			{
			$ddocumento=stripslashes($row["numerodocumento_pro"]);
			$ccontrasena=stripslashes($row["contrasena_pro"]);
			}
			
			
			if(($ddocumento==$numerodocumento_pro)&&($ccontrasena==$contrasena_pro))
			{
			$cont=$cont+1;
			}
			//fin del while
					
		if($cont!="0")
			{
				$_SESSION["estado"]="1";
				$_SESSION["numerodocumento_pro"]=$ddocumento;
				
				
			header ("location:index_proveedor.php");
			}		
		 
			if($cont=="0")
			    {
				header ("location:index_a.php");
				}
	 
	 }

 }
 
 $nuevo=new login();
 $nuevo->evaluar($_POST["contrasena"],$_POST["numerodocumento"]);
    ?>
  