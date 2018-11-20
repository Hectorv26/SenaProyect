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
<?php include ('banner.html')
?>
<font color="white">
<table width="80" height="140" border="0" align="center">
  <tr>
    <br>
    <div class="container">
    <td height="180" align="center" ><form id="form1" name="form1" method="post" action="neg_registrar_productos.php">
      <p>REGISTRO DE PRODUCTOS</p>
      <center><table width="100" height="160" border="0">
        <tr>
          <td width="320"><div align="center">Producto</div></td>
          <td ><div class="col-xs-3" align="center">
            <input type="text" name="nombre_producto" id="textfield3"  class="form-control" placeholder="producto" />
          </div></td>
        </tr>
        <tr>
          <td ><div align="center">Precio</div></td>
          <td width="40" height="40">
            <div class="col-xs-3" align="center">
            <input type="number" name="precio_producto" id="textfield4" class="form-control" placeholder="precio" />
            </div>
        </td>
        </tr>
      </font>
        <tr>
          <td ><div align="center">categoria</div></td>
          <td ><div class="col-xs-3" align="center">
            <select name="categoria_idcategoria" id="categoria_idcategoria" class="form-control" placeholder="categoria" />
              <option value="seleccione:"  >seleccione</option>
              <?php
				
				include ('conexion.php');
                 $sql = "SELECT * FROM categoria ";
					 if( !$result = $db->query($sql))
					 		{
						die ('No conecta ['.$db->error.']');
						 }
						while($row = $result->fetch_assoc())
						{
						$ffk_id_categoria=stripslashes($row["idcategoria"]);
						$categoria=stripslashes($row["tipo_categoria"]);
						echo "<option value =$ffk_id_categoria>$categoria</option>";
						}
                
                ?>
            </select>
          </div></td>
        </tr>
        <tr>
          <center><td colspan="2" ><label for="Registrar">
            <input type="submit" name="button" id="button" class="btn btn-success"   value="Registrar" /></center>
            </label></td>
        </tr>
        <style type="text/css">
                      .btn{
                        margin-top: 3px;
                        margin-left: 700%;
                      }
                    </style>






</table>
</form>
</div>
</td>
</tr>
</table>

</body>
</center>
</html>
<?php
include('footer.html');
?> 