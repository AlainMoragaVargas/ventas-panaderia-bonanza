<?php
    include 'conexion.php';

    $consulta = mysqli_query($dbconn,"SELECT estado_venta_prov FROM estado_ventas");

    $estado_venta_convert= mysqli_fetch_array($consulta);
    $estado_venta = $estado_venta_convert[0];
?>