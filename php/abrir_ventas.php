<?php

    include 'conexion.php';

    $consulta = mysqli_query($dbconn,"UPDATE estado_ventas SET estado_venta_prov=1 
                            WHERE id_estado_ventas=999;");

    $cerrar_venta_convert= mysqli_fetch_array($consulta);
    $cerrar_venta = $cerrar_venta_convert[0];

    $venta_anterior = mysqli_query($dbconn,"DELETE FROM venta_provisoria");
    
    $reinicio = mysqli_query($dbconn,"ALTER TABLE venta_provisoria AUTO_INCREMENT = 1");

    header("Location: index.php");
?>