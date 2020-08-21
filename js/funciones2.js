$(document).ready(function(){
    $('#tablaVentas').load('componentes/tabla-ventas.php');
});

function borrarRegistro(id){

    cadena="id=" + id;

    $.ajax({
        type:"POST",
        url:"eliminar_venta.php",
        data:cadena,
        success:function(r){
            if(r==1){
                alert("Registro eliminado.");
                $('#tablaVentas').load('componentes/tabla-ventas.php');
            }else
            {
                alert("Falló la eliminación del registro.");
            }
        }
    });
}
