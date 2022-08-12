<?php 

if (isset($_POST['btnBorrar'])) {

	include('conexion.php');

	$nroN=$_POST['t_nroB'];

	mysqli_query($conexion , "DELETE from lista where a_nro='$nroN'")
	            or die("Error al intentar eliminar el dato");

	mysqli_close($conexion);
	Echo "Datos Borrados Correctamente";
}

?>