<?php
    include '../conexion.php';
    include '../funciones.php';
    $ventas_provisorias = mysqli_query($dbconn,"SELECT *FROM venta_provisoria 
    ORDER BY id_venta_prov DESC");

    $filas = mysqli_num_rows($ventas_provisorias); 

    if($filas==0)
    {
        echo "Aún no hay registros el día de hoy.";
    }
    else
    { 
?>

<table class="table" id="myTable">
    <thead class="text-center">
        <tr>
            <th scope="col">N° de venta</th>
            <th scope="col">Valor venta($)</th>
            <th scope="col">Fecha </th>
            <th scope="col">Hora </th>
            <th scope="col">Acción </th>
        </tr>
    </thead>
    <tbody class="text-center">
            <?php
            while($mostrar=mysqli_fetch_array($ventas_provisorias))
            {
            ?>                  
        <tr>
            <td><?php echo $mostrar[0] ?></td>
            <td><?php $valor = $mostrar[1]; echo number_format($valor); ?></td> 
            <td><?php $fecha = $mostrar[2]; convertir_fecha($fecha); ?></td> 
            <td><?php echo $mostrar[3] ?></td> 
            <td>
                <button class="btn btn-danger"
                    onclick="borrarRegistro('<?php echo $mostrar[0] ?>')">
                    <i class="far fa-trash-alt"></i>
                </button>
            </td> 
        </tr>
        <?php     
            }
        ?>
    </tbody>
</table>
<?php
}
?>
<script>
$(document).ready( function () {
    $('#myTable').DataTable({
    });
} );
</script>

