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
<link rel="shortcut icon" href="images/LOGO-SIRNO.ico">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/estilonovillo.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Restaurante el novillo de oro</title>
</head>

<body>
<?php include('banner.html');
?>

<font color="white">
<table width="420" border="0" align="center">
  </tr>
  <tr>
    <td height="642" align="center" ><form id="form1" name="form1" method="post" action="neg_registrar_categoria.php">
      <p>
        <label for="id_producto"></label>
        </p>
      <p>Registro De Categorias</p>
      <table width="351" height="259" border="0">
        <tr>
          <td width="80" ><div align="center">categoria</div></td>
          <td width="80" ><div  class="col-xs-3" align="center">
            <input type="text" name="tipo_categoria" id="textfield" class="form-control" />
            </div></td>
        </tr>
      <tr>
        <td colspan="2">
          <label for="contrasena">
            <div align="center">
              <input type="submit" name="button" class="btn btn-success" id="button" value="Registrar" />
              </div>
            </label>
        </td>
        </tr>


        <style type="text/css">
                      .btn{
                        margin-top: 3px;
                        margin-left: 960%;
                      }
                    </style>




</font>
</table>
</form>
</tr>
</td>
</tr>
</table>
<?php include ('footer.html'); 
?>
</body>
</html>


