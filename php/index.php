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
    <link rel="stylesheet" href="../css/estilos.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/ba4000b368.js" crossorigin="anonymous"></script>
    
    <title>Página principal</title>
  </head>
  <body>
    <div class="container">
        <?php include '../navbar.php'; 
              include 'estado_venta.php';
              include 'funciones.php';
        ?>
        <br>
        <div class="titulo">
          <h1>Panadería bonanza</h1>
        </div>
        <br>
        <div class="text-center">
          <img src="../img/dibujo encabezado seccion obrador.png" class="img-circle" alt="Sample photo">
        </div>
        <br>
        <div class="text-center">
        <?php
          if($estado_venta==1)
          {?>
            <a href="cerrar_ventas.php" class="btn btn-dark">
            <i class="fas fa-door-closed"></i>
            cerrar ventas diarias</a>
          <?php
          }
          else
          { ?>
            <a href="abrir_ventas.php" class="btn btn-success">
              <i class="fas fa-door-open"></i>
              Abrir ventas diarias</a>
          <?php
          }
          ?>
          </div>
          <br>
          <div class="text-center">
              <h3><i class="fas fa-calendar-alt"></i> <?php echo $actual ?></h3>            
          </div>
    </div>
  </body>
</html>
