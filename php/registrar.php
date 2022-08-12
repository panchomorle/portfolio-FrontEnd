<?php
  if (isset($_POST['btnRegistrar'])) {

  	include('conexion.php');

  	$nro=(int)$_POST['t_nro'];
    $dni=$_POST['t_dni'];
  	$ayn=$_POST['t_ayn'];
    $cur=$_POST['t_cur'];
  	$mat=$_POST['t_mat'];
  	$not1=$_POST['t_not1'];
    $not2=$_POST['t_not2'];
    $not3=$_POST['t_not3'];

  	$insert="INSERT into lista values ('$nro','$dni','$ayn','$cur','$mat','$not1','$not2','$not3')";

  	$resultado=mysqli_query($conexion,$insert)
  	           or die("Error al insertar Registro");

  	mysqli_close($conexion);
  	Echo "Datos Insertados Correctamente";


  	
  }



?>