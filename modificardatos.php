<?php include ("seguridad_admin.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurante el novillo de oro</title>
<style type="text/css">

</style>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/estilonovillo.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
  <table width="900" border="0" align="center" >
    <tr>
     <font color="white">
      <td width="790" height="131"><?php include ("banner.html")?></td>
        </tr>
          <tr>
            <td height="642" align="center"  border="0">
             
                <center><h2>Update data</h2>
     
      <?php 
 class usuario
 {
   public function listar ($numerodocumento)
   {
     //session_start();
     $cont='0';
     
     include ('conexion.php');
     $sql = "SELECT * FROM persona Where numerodocumento='$numerodocumento' ";
     if( !$result = $db->query($sql))
     {
      die ('No conecta ['.$db->error.']');
     }
     
       
       echo"<table width='80' height='140' border='0'>";
       echo '<tr bgcolor="#424242">';
       echo "<td>Id usuario</td>";
       echo "<td>Nombre</td>";
       echo"<td>Apellido</td>";
       echo"<td>Telefono</td>";
       echo"<td>Direccion</td>";
       echo"<td>E-mail</td>";
       echo"<td>Documento</td>";
       echo"<td>Contraseña</td>";
       echo"<td>Genero</td>";
       echo"<td>Rol</td>";
       echo"<td>Tipo de documento</td>";
       echo "</tr>";
      
      while($row = $result->fetch_assoc())
      {
      $iidusuario =stripslashes($row["idpersona"]);
      $_SESSION["iidusuario"]=stripslashes($row["idpersona"]);  

      $nnombre=stripslashes($row["nombre"]);
      $_SESSION["nnombre"]=stripslashes($row["nombre"]);
      
      $aapellido=stripslashes($row["apellido"]);
      $_SESSION["aapellido"]=stripslashes($row["apellido"]);
      
      $ttelefono=stripslashes($row["telefono"]);
      $_SESSION["ttelefono"]=stripslashes($row["telefono"]);
      
      $ddireccion=stripslashes($row["direccion"]);
      $_SESSION["ddireccion"]=stripslashes($row["direccion"]);
      
      $eemail=stripslashes($row["email"]);
      $_SESSION["eemail"]=stripslashes($row["email"]);
      
      $nnumerodocumento=stripslashes($row["numerodocumento"]);
      $_SESSION["nnumerodocumento"]=stripslashes($row["numerodocumento"]);
      
      $ccontrasena=stripslashes($row["contrasena"]);
      $_SESSION["ccontrasena"]=stripslashes($row["contrasena"]);

      $ggenero_idgenero=stripslashes($row["genero_idgenero"]);
      $_SESSION["ggenero_idgenero"]=stripslashes($row["genero_idgenero"]);

      $ffk_id_rol_idrol=stripslashes($row["fk_id_rol_idrol"]);
      $_SESSION["ffk_id_rol_idrol"]=stripslashes($row["fk_id_rol_idrol"]);

      $ttipodocumento_iddocumento=stripslashes($row["tipodocumento_iddocumento"]);
      $_SESSION["ttipodocumento_iddocumento"]=stripslashes($row["tipodocumento_iddocumento"]);







       //subconsulta
         /* $sql2 = "SELECT * FROM rol WHERE fk_id_rol='$ffk_id_rol'";
           if( !$result2 = $db->query($sql2))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row2 = $result2->fetch_assoc())
            {
            $rrol=stripslashes($row2["rol"]);
            }*/
          //finsubconsulta
      
      
  
        
        echo '<tr bgcolor="">';
            //echo "<td>$ffk_id_rol</td>";
        echo "<td>$iidusuario</td>";
        echo "<td>$nnombre</td>";
        echo"<td>$aapellido</td>";
        echo"<td>$ttelefono</td>";
        echo"<td>$ddireccion</td>";
        echo"<td>$eemail</td>";
        echo"<td>$nnumerodocumento</td>";
        echo"<td>$ccontrasena</td>";
        echo"<td>$ggenero_idgenero</td>";
        echo"<td>$ffk_id_rol_idrol</td>";
        echo"<td>$ttipodocumento_iddocumento</td>";
        //echo "<td>$rrol</td>";
            echo "</tr>";
            
      }
      //fin del while
      echo"</table>";
  
   }//fin del metodo
   
   

 }//fin de la clase
 

 $nuevo=new usuario();
 $nuevo->listar($_POST["numerodocumento"]);
    ?>

     <form id="form1" name="form1" method="post" action="modifiardatos2.php">
      <br>
      <br>
      <table width="351" height="259" style="background-color: transparent; color: white;" border="0">
         <tr>
          <td ><div align="center">IdUSUARIO</div></td>
          <td ><div align="center">
            <input type="text" name="idpersona" id="idpersona" readonly required value="<?php echo $_SESSION["iidusuario"];?>" />
            </div></td>
        </tr>
        <tr>
          <td ><div align="center">Nombre</div></td>
          <td ><div align="center">
            <input type="text" name="nombre" id="nombre"  required value="<?php echo $_SESSION["nnombre"];?>" />
            </div></td>
        </tr>
        <tr>
          <td ><div align="center">Apellido</div></td>
          <td ><div align="center">
            <input type="text" name="apellido" id="apellido"  required value="<?php echo $_SESSION["aapellido"];?>" />
          </div></td>
        </tr>
        <tr>
          <td ><div align="center">Telefono</div></td>
          <td ><div align="center">
            <input type="text" name="telefono" id="telefono"  required value="<?php echo $_SESSION["ttelefono"];?>" />
          </div></td>
        </tr>
        <tr>
          <td ><div align="center">Direccion</div></td>
          <td ><div align="center">
            <input type="text" name="direccion" id="direccion"  required value="<?php echo $_SESSION["ddireccion"];?>" />
          </div></td>
        </tr>
        <tr>
          <td ><div align="center">E-mail</div></td>
          <td ><div align="center">
            <input type="text" name="email" id="email"  required value="<?php echo $_SESSION["eemail"];?>" />
          </div></td>
        </tr>
        <tr>
          <td ><div align="center">Documento</div></td>
          <td ><div align="center">
            <input type="text" name="numerodocumento" id="textfield" required value="<?php echo $_SESSION["nnumerodocumento"]; ?>" /></div></td>
        </tr>
        <tr>
          <td ><div align="center">Contraseña</div></td>
          <td ><div align="center">
            <input type="text" name="contrasena" id="textfield3"  required value="<?php echo $_SESSION["ccontrasena"];?>" />
            </div></td>
        </tr>
         <tr>
          <td ><div align="center">Genero</div></td>
          <td ><label for="genero_idgenero"></label>
            <div align="center">
              <select name="genero_idgenero" id="genero_idgenero">
                <option value="seleccione:" >seleccione</option>
                <?php
        
        include ('conexion.php');
                 $sql2 = "SELECT * FROM genero ";
           if( !$result2 = $db->query($sql2))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row2 = $result2->fetch_assoc())
            {
            $iddgenero=stripslashes($row2["idgenero"]);
            $ttipogenero=stripslashes($row2["tipo_de_genero"]);
            echo "<option value =$iddgenero>$ttipogenero</option>";
            }
                
                ?>
                </select>
            </div></td>
        </tr>
          <tr>
          <td ><div align="center">Tipo documento</div></td>
          <td ><label for="tipodocumento_iddocumento"></label>
            <div align="center">
              <select name="tipodocumento_iddocumento" id="tipodocumento_iddocumento">
                <option value="seleccione:" >seleccione</option>
                <?php
        
        include ('conexion.php');
                 $sql3 = "SELECT * FROM tipodocumento ";
           if( !$result3 = $db->query($sql3))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row3 = $result3->fetch_assoc())
            {
            $idddocumento=stripslashes($row3["iddocumento"]);
            $ttipodocumento=stripslashes($row3["tipo_de_documento"]);
            echo "<option value =$idddocumento>$ttipodocumento</option>";
            }
                
                ?>
              </select>
            </div></td>
        </tr>
        <tr>
          <td ><div align="center">Rol</div></td>
          <td ><label for="fk_id_rol_idrol"></label>
            <div align="center">
              <select name="fk_id_rol_idrol" id="fk_id_rol_idrol">
                <option value="seleccione:" >seleccione</option>
                <?php
        
       include ('conexion.php');
                 $sql = "SELECT * FROM fk_id_rol ";
           if( !$result = $db->query($sql))
              {
            die ('No conecta ['.$db->error.']');
             }
            while($row = $result->fetch_assoc())
            {
            $ffk_id_rol=stripslashes($row["idrol"]);
            $rrol=stripslashes($row["des_rol"]);
            echo "<option value =$ffk_id_rol>$rrol</option>";
            }
                
                ?>
                </select>
            </div></td>
        </tr>

            </div></td>
        </tr>

              

          <center><td colspan="2" ><label for="contrasena"></center>
            
            <div align="center">
                <div class="container">
                  
                    <input type="submit" class="btn btn-success "  name="button" id="button" value="Actualizar"/>
                    <br>

                     <input type="submit" class="btn btn-danger" value="Volver" href="index_aplicativo.php"/>   
                  
                </div>
             </div>

              
                
                      </label>
                    </td>
                    <style type="text/css">
                      .btn{
                        margin-top: 3px;
                        margin-left: 750%;
                      }
                    </style>


        </tr>

    </font>    
    </center>    
    </table>
    </form>
    </td>
    </tr>
    <tr>
    <td height="43"><?php include ("footer.html")?></td>
    </tr>
    </table></body></html>