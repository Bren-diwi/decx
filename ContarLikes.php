<?php
$idFotoMeGusta = $registro["fotID"];
$sqlMegusta = "SELECT COUNT(*) FROM tbllikes WHERE likfoto=$idFotoMeGusta";
$resultadoMeGusta = mysqli_query($conexion, $sqlMegusta);
$registroMeGusta = mysqli_fetch_row($resultadoMeGusta);
echo $registroMeGusta[0];
?>