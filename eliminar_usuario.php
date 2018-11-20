<?php include ("seguridad_admin.php")
?>
<html>
	<head>
		<link rel="shortcut icon" href="images/LOGO-SIRNO.ico">
		<title>Inicio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilonovillo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
<body>
<?php
include('banner.html');
?>

 
   


   <table width="820" border="0" align="center" class="fondotabla">
   <font color="white"> 	
  <tr>
    <td  width="130" height="640"  border="0" align="center">
      <header>
      

<?php 
 class eliminacion
 {
	 public function eliminar ($numerodocumento)
	 {
		 //session_start();
		 $cont='0';
		 
		 include ('conexion.php');
		 $sql = "DELETE FROM persona WHERE numerodocumento ='$numerodocumento'";
		 if( !$result = $db->query($sql))
		 {
			die ('No conecta ['.$db->error.']');
		 }

		 	echo "el usuario a sido eliminado";  

	 }//fin del metodo
	 
	

 }//fin de la clase
 
 $nuevo=new eliminacion();
 $nuevo->eliminar($_POST["numerodocumento"]);
    ?>
	
    			   </font>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      


       </main>

      </td>
    </tr>  


</table>
<?php
include('footer.html');
?> 

