<?php
	session_start();
	$_session["estado"]="0";
	$_session["id_rol"]="0";
	header ("location: index.php");
?>