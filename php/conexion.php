<?php
  $server="localhost";
  $usuario="root";
  $contraseña="";
  $bd="basededatos";

  $conexion=mysqli_connect($server,$usuario,$contraseña,$bd)
            or die("NO podemos conectarnos con la Base de Datos");

?>