
<?php
session_start();
  if(!isset($_SESSION['correo'])){
   header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title> 
    decx
    </title>
  </head>
  <body background="pict/colors.png" heigt="100px" width="100px">
  <body>
    <center>
    <font size="31px" face="Impact"> 
      Subir Fotos</font><br>
  <br>
  </center>

  <table class="table table-striped" style="width: 100%;">
  <td style="width: 70%;"> 
  <form id="frmsubirfoto" name="frmsubirfoto" method="POST" action="SubirFoto.php" enctype="multipart/form-data">
  <br>  
  <center>
    <input  type="file" id="fileFoto" name="fileFoto"/>
  </center>
  <br>
  <br>
  <center>
  Descripcion
  <input type="text" id="textdescripcion" name="textdescripcion">
  <br>
  </center>
<center>
  <input type="submit" id="btnenviarfoto" name="btnenviarfoto" value="Enviar" />
</center>
  <br>
  </td>
      </form >
  </tr>
 
  </table>
  <br>
  <center>
    <a href='principal.php'> Inicio </a>
    <?php include("MstFotos.php");?>
</center>
<center>

</center>
  </body>
</html>
</body>