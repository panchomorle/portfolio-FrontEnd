<?php

    if (isset($_POST['btnModificar'])) {


    include('conexion.php');


    $nro=(int)$_POST['m_nro'];
    $dni=$_POST['m_dni'];
    $ayn=$_POST['m_ayn'];
    $cur=$_POST['m_cur'];
    $mat=$_POST['m_mat'];
    $not1=$_POST['m_not1'];
    $not2=$_POST['m_not2'];
    $not3=$_POST['m_not3'];


        mysqli_query($conexion , "UPDATE lista
                            set a_dni='$dni',a_ayn='$ayn',a_cur='$cur',a_mat='$mat',a_not1='$not1',a_not2='$not2',a_not3='$not3'
                           where a_nro='$nro'")

        or die("no se Modificaron los datos");

                     
        mysqli_close($conexion);
        Echo "DATOS MODIFICADOS CORRECTAMENTE";

    }

?>