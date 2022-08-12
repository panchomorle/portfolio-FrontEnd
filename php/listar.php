<?php 

include('conexion.php');

if (isset($_POST['btnLista'])) {
	$consulta=mysqli_query($conexion, "SELECT * from lista ") or die("Error de Datos");
}


echo "LISTADO DE BASE DE DATOS";

echo '<table border="10">';
      echo '<tr>';
          echo '<th>Nro Alumnos</th>';
          echo '<th>DNI</th>';
          echo '<th>Apellido y Nombre</th>';
          echo '<th>Curso </th>';
          echo '<th>Materia</th>';
          echo '<th>Nota 1</th>';
          echo '<th>Nota 2</th>';
          echo '<th>Nota 3</th>';
          echo '<th>Promedio</th>';
          echo '</tr>';
          $TotalDatos=0;

        
while ($extraer=mysqli_fetch_array($consulta)) {
		$div=3;
		$not1=$extraer['a_not1'];
   		 $not2=$extraer['a_not2'];
   		 $not3=$extraer['a_not3'];
         $prom=($not1+$not2+$not3)/$div;
	
	echo '<tr>';
	  echo '<td>' .$extraer['a_nro'].'</td>';
	  echo '<td>' .$extraer['a_ayn'].'</td>';
	  echo '<td>' .$extraer['a_dni'].'</td>';
	  echo '<td>' .$extraer['a_cur'].'</td>';
	  echo '<td>' .$extraer['a_mat'].'</td>';
	  echo '<td>' .$extraer['a_not1'].'</td>';
	  echo '<td>' .$extraer['a_not2'].'</td>';
	  echo '<td>' .$extraer['a_not3'].'</td>';
	  echo '<td>' .$prom.'</td>';
	 echo '</tr>';
	 $TotalDatos=$TotalDatos+1;

}

echo '<th >Total de Alumnos=</th>';
echo '<td>'.$TotalDatos.'</td>';

mysqli_close($conexion);

echo '</table >';

?>