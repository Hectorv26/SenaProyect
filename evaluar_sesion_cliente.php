<?php 
session_start();


 class Login_cliente
 {
	 public function evaluar_inicio ($contrasena_cliente,$email_cliente)
	 {

		 $cont='0';
		 include ("conexion.php");
		 
		 $sql = "SELECT * FROM clientes WHERE email_cliente='$email_cliente'";

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
			$eemail=stripslashes($row["email_cliente"]);
			$ccontrasena=stripslashes($row["contrasena_cliente"]);
			}
		
			if(($eemail==$email_cliente)&&($ccontrasena==$contrasena_cliente))
			{
			$cont=$cont+1;
			}
			//fin del while
					
		if($cont!="0")
			{
				$_SESSION["estado"]="1";
				$_SESSION["email_cliente"]=$eemail;
			header ("location:index_cliente.php");
			}		
		 
			if($cont=="0")
			    {
				header ("location:index_a.php");
				}
	 
	 }

 }
 
 $nuevo=new Login_cliente();
 $nuevo->evaluar_inicio($_POST["contrasena"],$_POST["numerodocumento"]);
 ?>
  