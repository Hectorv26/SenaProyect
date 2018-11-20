<?php
$db = new mysqli('localhost','root','','novillo');
$acentos = $db->query("SET NAMES'utf8'");
if($db->connect_error>0){
	
die('No se puede conectar['.$db->connect_error.']');	

}
?>

