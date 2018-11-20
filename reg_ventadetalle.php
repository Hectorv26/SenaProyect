<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
            <link rel="stylesheet" type="text/css" href="css/estilonovillo.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
<title>Restaurante el novillo de oro</title>
<style type="text/css">
</style>
</head>




  
<body>

<?php include ('banner.html')
?>
<font color="white">

<table width="80" border="0" align="center" >
  <tr>
    <br>
      <h2>DETALLES DE VENTA</h2>

<div class="container" >


  <form id="form2" name="form1" method="post" action="neg_registrar_ventadetalle.php">

     <div class="form-group">
      <label class="control-label col-sm-2" for="cantidad_venta">Cantidad:</label>
      <div class="col-sm-10">
        <input type="cantidad_venta" class="form-control" id="cantidad_venta"  name="cantidad_venta">
      </div>
    </div>

 <div class="form-group">
      <label class="control-label col-sm-2" for="formadepago_idformadepago">Forma de pago:</label>
      <div class="col-sm-10">
      <select name="formadepago_idformadepago" class="form-control">
        <?php
        
        include ('conexion.php');
                 $sql2 = "SELECT * FROM formadepago ";
           if( !$result2 = $db->query($sql2))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row2 = $result2->fetch_assoc())
            {
            $iddforma=stripslashes($row2["idformadepago"]);
            $ttipopago=stripslashes($row2["tipo_de_pago"]);
            echo "<option value =$iddforma>$ttipopago</option>";
            }
                
                ?>
                </select>
        </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="venta_idventa">Numero de venta:</label>
      <div class="col-sm-10">
      <select name="venta_idventa" class="form-control">
        <?php
        
        include ('conexion.php');
                 $sql3 = "SELECT * FROM venta ";
           if( !$result3 = $db->query($sql3))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row3 = $result3->fetch_assoc())
            {
            $iddventa=stripslashes($row3["idventa"]);
           
            echo "<option value =$iddventa>$iddventa</option>";
            }
                
                ?>
                </select>
        </div>
  </div>
 <div class="form-group">
      <label class="control-label col-sm-2" for="producto_idproducto">Producto:</label>
      <div class="col-sm-10">
      <select name="producto_idproducto" class="form-control">
        <?php
        
        include ('conexion.php');
                 $sql2 = "SELECT * FROM producto ";
           if( !$result2 = $db->query($sql2))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row2 = $result2->fetch_assoc())
            {
            $iddproducto=stripslashes($row2["idproducto"]);
            $nnombrepro=stripslashes($row2["nombre_producto"]);
            echo "<option value =$iddproducto>$nnombrepro</option>";
            }
                
                ?>
                </select>
                 <br><br><br>
        </div>
      </div>
       




       <tr>
          <td colspan="2" ><label for="contrasena">
            <div align="center">
              <input type="submit" name="button" id="button"  class="btn btn-danger role" value="Registrar" />
              </div>
            </label></td>
        </tr>
    </table>
      
    </form>
  </div>
  </tr>
  <tr>

  </tr>
</font>
</table>
<?php include ('footer.html');
?>
</body>
</html>