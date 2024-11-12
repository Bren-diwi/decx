<?php
session_start();
if (!isset($_SESSION["correo"])){
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html>
    <head>
</head>
<body background="pict/colors.png" heigt="10px" width="10px">
<body>
<meta charset="UTF-8">
     <title>
         Decx 
     </title>
     <center>
        <br>
     <font size="31px" color="red">
         Decx
     </font>
     <br>
     <br>
     </center>
     <center>
     <font face="Impact">
     Welcome , Bienvenidos , 歡迎 , Accediste con el Correo :<?php echo $_SESSION["correo"]; ?>
     <br>
     
     </font>
    </center>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;">
               <font face="Comic Sans Ms">
                   <center>
                <a href="principal.php">Mensajes/ </a>
                <a href="fotos.php">Fotos/ </a>
                <a href="cerrar.php">Cerrar Sesion/ </a>
               </font>
               </center>
           </td>
           <td style="width: 65%;">
               <font face="Impact">
               Mensajes
               </font>
               <br>
               <font face="Comic Sans Ms">
               <form id="frmMsj" name="frmMSJ" method="POST" action="GuardarMSJ.php"> 
                <br>
               Para
               <input type="email" id="msj_para" name="msj_para">
               <br>
               Asunto
               <input type="text" id="txtAsunto" name="txtAsunto">
               <br>
               <br>
               Mensajes 
               <textarea id="txtMensaje" name="txtMensaje"> </textarea>
               <br>
               <input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar Mensaje">
              </font>
             </form>
             <?php include("LeerMSJ.php");?>

           </td>
       </tr>
    </table>
</body>
</html>
</body>