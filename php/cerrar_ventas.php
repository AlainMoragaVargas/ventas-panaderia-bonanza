<?php

    include 'conexion.php';

    include 'total_diario.php';

    $consulta = mysqli_query($dbconn,"UPDATE estado_ventas SET estado_venta_prov=0 
                            WHERE id_estado_ventas=999;");

    $cerrar_venta_convert= mysqli_fetch_array($consulta);
    $cerrar_venta = $cerrar_venta_convert[0];

    $venta_total = mysqli_query($dbconn,"INSERT INTO ventas_totales 
    VALUES (default,'$total_diario','$fecha_hoy')");

    header("Location: index.php");
?>