<?php
    include 'conexion.php';
    date_default_timezone_set('America/Santiago');
    $fecha_hoy = date("y-m-d");

    $consulta = mysqli_query($dbconn,"SELECT SUM(valor_venta_prov) FROM venta_provisoria 
    WHERE fecha_venta_prov='$fecha_hoy'");

    $total_diario_convert = mysqli_fetch_array($consulta);
    $total_diario = $total_diario_convert[0];


    /* formateo de fecha */

    $bMeses = array("void","enero", "febrero", "marzo", "abril", "mayo", "junio", "julio",
    "agosto", "septiembre", "octubre", "noviembre", "diciembre");
    $bDias = array("domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado");
    $fecha = getdate();
    
    $dias = $bDias[$fecha["wday"]];
    $meses = $bMeses[$fecha["mon"]];
    
    $actual = "$dias ".$fecha["mday"]." de ".$meses."";

?>