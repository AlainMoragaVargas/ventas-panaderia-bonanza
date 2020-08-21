function validar_fecha()
{
    var desde, hasta;
    desde = document.getElementById("busquedaDesde").value;
    hasta = document.getElementById("busquedaHasta").value;

    if(desde==="" || hasta==="")
    {
        alert("Error en la búsqueda, verifique los parámetros.");
        return false;
    }
    else if(Date.parse(hasta) < Date.parse(desde))
    {
        alert("Error en la búsqueda, verifique los parámetros.");
        return false;
    }
    else
    {
        return true;
    }
}