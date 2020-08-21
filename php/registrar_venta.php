<?php

include 'conexion.php';

$valor_venta = $_POST['valorVenta'];
$valor_venta = preg_replace('([^A-Za-z0-9])', '', $valor_venta);

date_default_timezone_set('America/Santiago');
$fecha_venta = date("y-m-d H:i:s");

$hora = getdate();
$hora_venta = $hora['hours'].":".$hora['minutes'];

$ingresar_venta = mysqli_query($dbconn,"INSERT INTO venta_provisoria VALUES
(default,'$valor_venta','$fecha_venta','$hora_venta')");

if($ingresar_venta)
{
    echo 1;
}
else
{
    echo 0;
}

?>