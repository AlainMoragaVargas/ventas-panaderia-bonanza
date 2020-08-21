$(document).ready(function(){
    $('#btnRegistrarVenta').click(function(){
        var datos=$('#formularioVenta').serialize();
        $.ajax({
            type:"POST",
            url:"registrar_venta.php",
            data:datos,
            success:function(r){
                if(r==0){
                    alert("Ingrese un monto.");
                }
                else{
                    limpiarRegistro();
                    alert("Venta registrada !");
                }
            }
        });
        return false;
    });
});

function limpiarRegistro()
{
    var valor_venta;
    valor_venta = document.getElementById("valorVenta").value="";
}


