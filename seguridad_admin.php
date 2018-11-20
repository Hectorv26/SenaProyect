<?php
		session_start();
		if(($_SESSION["estado"]!="1")&&($_SESSION["id_rol"]!="admin"))
		{
		header ("location: index_a.php");
		}
?>