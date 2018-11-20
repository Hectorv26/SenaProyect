<?php 
session_start();


 class Login
 {
	 public function evaluar ($contrasena,$numerodocumento)
	 {

		 $cont='0';
		 include ("conexion.php");
		 
		 $sql = "SELECT * FROM persona WHERE numerodocumento='$numerodocumento'";

		 if(!$result = $db->query($sql))
		 {
			die ('No conecta ['.$db->error.']');
		 }
			while($row = $result->fetch_assoc())
			{
			$ddocumento=stripslashes($row["numerodocumento"]);
			$ccontrasena=stripslashes($row["contrasena"]);
			}
			$ffk_id_rol=stripslashes($row["des_rol"]);
			
			if(($ddocumento==$numerodocumento)&&($ccontrasena==$contrasena))
			{
			$cont=$cont+1;
			}
			//fin del while
					
		if($cont!="0")
			{
				$_SESSION["estado"]="1";
				$_SESSION["numerodocumento"]=$ddocumento;
				
				if($ffk_id_rol=="1")
				{
					$_SESSION["idrol"]="admin";
				}
			header ("location:index_aplicativo.php");
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
  