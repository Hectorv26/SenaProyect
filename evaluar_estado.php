<?php
class login
{
	public function evaluar ($contrasena,$nombre)
	{
		{session_start();
		if ($contrasena=="1234")
			$_SESSION["eval"]="1";
			$_SESSION["nombre"]=$nombre;
			header ("location: capa1.php");
		
		}
		
	if ($contrasena!="1234")
		{
		header ("location: index_a.php");
		}	
	}
}
$nuevo= new login();
$nuevo->evaluar($_POST["contrasena"],$_POST["nombre"]);

?>