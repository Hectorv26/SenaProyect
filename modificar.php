<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/estilonovillo.css" rel="stylesheet" type="text/css" media="all" />
<title>Restaurante el novillo de oro</title>
<style type="text/css">

</style>
</head>

<body>
<?php include('banner.html')
?>
<table width="850" border="0" align="center">

  <tr>
    <td height="240" align="center" >
     <form id="form1" name="form1" method="post" action="modificardatos.php" value="required">
      <table width="60" height="140" border="0">
        <font color="white">
        <h2>Actualizar datos</h2>
        <br>
        <br>
        <tr>
          <td width="90" height="60" border="2" ><div align="center"  class="fondotabla"><font color="white">Documento</font></div></td>
          <td width="90" height="60" border="4"><div align="center" class="fondotabla">
            <input type="text" name="numerodocumento"  id="textfield2" placeholder="Ingrese el documento" " required />
             <div align="center">
              <br>
              <input type="submit" name="button" id="button" class='btn btn-danger' value="Modificar Usuario"  />
              </font>
              </div>
          </td>
        </tr>
           
            </label></td>
        </tr>
    </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </form>
<?php include('footer.html')
?>
    </tr>
</table>
</body>
</html>