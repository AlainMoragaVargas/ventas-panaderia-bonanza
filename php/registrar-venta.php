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
    <link rel="stylesheet" href="css/estilos.css">

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

    <script src="https://code.jquery.com/jquery-3.5.1.js" 
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
    <script src="../js/funciones.js"></script>
    <script src="../js/separadorDecimales.js"></script>
    <title>Registrar venta</title>
  </head>
  <body>
    <div class="container">
      <?php include '../navbar.php'; 
            include 'estado_venta.php';
      ?>
        <div class="card" style="margin-top: 1%;">
          <div class="card-header"><h4>Registrar venta</h4></div>
            <div class="card-body">
            <?php
                  if($estado_venta==0)
                  {?>
                      <div class="alert alert-danger" role="alert">
                      <i class="far fa-times-circle"></i>
                      No se puede registrar, primero abra las ventas del día.
                      </div>
                  <?php
                  }
                  else
                  { ?>
                  <form id="formularioVenta" method="POST">
                    <div class="form-group row">
                      <label for="Asunto" class="col-sm-2 col-form-label">valor ($):</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" id="valorVenta" name="valorVenta">
                      </div>
                    </div>
                    <div class="form-group text-center">
                      <div class="col-sm-10">
                        <button type="button" class="btn btn-success" id="btnRegistrarVenta"> 
                        <span><i class="fas fa-dollar-sign"></i></span>  
                        Registrar</button>
                      </div>
                    </div>
                  </form>
                  <?php
                  }
                  ?>
            </div>
        </div>
    </div>
    <br>
  </body>
  <script src="../js/separadorDecimales.js"></script>
</html> 
