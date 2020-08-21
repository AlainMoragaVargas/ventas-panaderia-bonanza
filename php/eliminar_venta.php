<?php

include 'conexion.php';

$id_venta_prov = $_POST['id'];

$eliminar_registro = mysqli_query($dbconn,"DELETE FROM venta_provisoria 
WHERE id_venta_prov='$id_venta_prov'");

if($eliminar_registro)
{
    echo 1;
}
else
{
    echo 0;
}

?>