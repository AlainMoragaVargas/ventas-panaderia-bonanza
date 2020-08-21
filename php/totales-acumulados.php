<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/tablas.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/ba4000b368.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" 
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  
    <script src="../js/validarFecha.js"></script>
    <script src="../js/paginator.js"></script>

    <title>Totales acumulados</title>
  </head>
  <body>
    <div class="container">
      <?php include '../navbar.php';
      ?>
        <div class="card" style="margin-top: 1%;">
          <div class="card-header"><h4>Totales acumulados</h4></div>
            <div class="card-body">
              <form action="" method="POST" onsubmit="return validar_fecha();">
                    <div class="form-group row">
                      <label for="busquedaDesde" class="col-sm-2 col-form-label">Desde:</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="busquedaDesde" name="busquedaDesde">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="busquedaHasta" class="col-sm-2 col-form-label">hasta:</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="busquedaHasta" name="busquedaHasta">
                      </div>
                    </div>
                    <div class="form-group text-center">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btnBuscar" name="btnBuscar"> 
                        <span><i class="fas fa-search"></i></span>  
                        Buscar registros</button>
                      </div>
                    </div>
              </form>
            </div>
        </div>
        <div class="card" style="margin-top: 1%;">
          <div class="card-header"><h4>Resultados</h4></div>
            <div class="card-body">
            <table class="table" id="myTable">
              <thead class="text-center">
                <tr>
                  <th scope="col">N° registro</th>
                  <th scope="col">Valor venta($)</th>
                  <th scope="col">Fecha </th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php
                  if(isset($_POST['btnBuscar']))
                {
                  include 'conexion.php';
                  include 'funciones.php';
                  $desde = $_POST['busquedaDesde'];
                  $hasta = $_POST['busquedaHasta'];
                  error_reporting(E_ALL ^ E_NOTICE);
                  $buscar = mysqli_query($dbconn,"SELECT *FROM ventas_totales 
                  WHERE fecha_ventas_totales BETWEEN '$desde' AND '$hasta'");

                  $suma_busqueda = mysqli_query($dbconn,"SELECT SUM(valor_total) FROM ventas_totales 
                  WHERE fecha_ventas_totales BETWEEN '$desde' AND '$hasta'");
                  
                  $suma_convert= mysqli_fetch_array($suma_busqueda);
                  $total_busqueda = $suma_convert[0];

                  number_format($total_busqueda);

                  while($mostrar=mysqli_fetch_array($buscar))
                  {
                  ?>                  
            <tr>
                <td><?php echo $mostrar[0] ?> </td>
                <td><?php 
                    $valor_venta = $mostrar[1];
                    echo number_format($valor_venta);
                    ?> 
                </td>
                <td><?php $fecha = $mostrar[2]; convertir_fecha($fecha);?> 
                </td>
            </tr>
              <?php     
                }
            }
            ?>
              </tbody>
            </table>
            
            <?php
            error_reporting(E_ALL ^ E_NOTICE);
            if($buscar)
            {?>
            <br>
            <div class="alert alert-success text-center" role="alert">
                <?php echo "Total de ventas acumuladas : "." $ ".number_format($total_busqueda); ?> 
                <i class="fas fa-piggy-bank"></i>
             </div>
            <?php
            }
            else
            {
              echo "No hay registros para los criterios seleccionados.";
            } 
            ?>
            </div>
        </div>
        <link rel="stylesheet" href="../css/tablas.css">
    </div>
  </body>
</html> 

