<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Restaurante el novillo de oro</title>
<style type="text/css">

</style>

</head>
  <td height="642" align="center"><form id="form1" name="form1" method="post" action="neg_registrar_venta.php">
<body>
<?php include ('banner.html')
?>
<table width="900" border="0" align="center">

  <tr>
    <td height="642" align="center"><form id="form1" name="form1" method="post" action="neg_registrar_venta.php">
      <p>
        <label for="id_produtos"></label>
        </p>
      <p>VENTA</p>
      <table width="351" height="259" border="0">
        
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">fecha</div></td>
          <td bgcolor="#FFFFFF"><div align="center">

 <input type="date" name="fecha" min="2018-10-25"
                                 max="2020-12-30" >
          </div></td>
        </tr>
          <tr>
          <td bgcolor="#FFFFFF"><div align="center">Nombre del Cliente</div></td>
          <td bgcolor="#FFFFFF"><div align="center">
            <select name="clientes_idclientes" id="clientes_idclientes">
              <option value="seleccione:" >seleccione</option>
              <?php
        
        include ('conexion.php');
                 $sql2 = "SELECT * FROM clientes ";
           if( !$result2 = $db->query($sql2))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row2 = $result2->fetch_assoc())
            {
            $iddclientes=stripslashes($row2["idclientes"]);
            $ccliente=stripslashes($row2["nombre_cliente"]);
            echo "<option value =$iddclientes>$ccliente</option>";
            }
                
                ?>
            </select>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">Nombre del empleado</div></td>
          <td bgcolor="#FFFFFF"><div align="center">
            <select name="persona_idpersona" id="persona_idpersona">
              <option value="seleccione:" >seleccione</option>
              <?php
				
				include ('conexion.php');
                 $sql3 = "SELECT * FROM persona ";
					 if( !$result3 = $db->query($sql3))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row3 = $result3->fetch_assoc())
						{
						$iddpersona=stripslashes($row3["idpersona"]);
						$nnombre=stripslashes($row3["nombre"]);
						echo "<option value =$iddpersona>$nnombre</option>";
						}
                
                ?>
            </select>
          </div></td>
        </tr>
      
  
       
       
        <tr>
          <td colspan="2" bgcolor="#FFFFFF"><label for="contrasena">
            <div align="center">
              <input type="submit" name="button" id="button" value="Registrar" />
              </div>
            </label></td>
        </tr>
    </table>
      
    </form>
  
  </tr>
  <tr>

  </tr>
</table>
<?php include ('footer.html');
?>
</body>
</html>