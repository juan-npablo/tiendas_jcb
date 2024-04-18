<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: ActualizarVenta
Descripción: Recibe el id registrado en la base de datos, el cual es buscado en ésta y trae los campos relacionados 
             con este id, que dependiendo de la necesidad del usuario podrá editar.
*/		
    include("..\conexion.php");

    $id_factura = $_GET['id_factura'];
    $id_producto = $_GET['id_producto'];
    $seleccionarRegristro="SELECT * FROM ventas WHERE id_factura ='$id_factura' AND id_producto ='$id_producto'";
    $resultadoSeleccion = mysqli_query($conn,$seleccionarRegristro);
    $mostrarRegistro = mysqli_fetch_array($resultadoSeleccion);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiendas JCB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-3">
            <div class="card border border-dark">
              <div class="card-header border-bottom border-warning bg-secondary bg-opacity-25 text-center">
                Formulario Ventas
              </div>
              <div class="card-body">
                <form action="updateVenta.php" method="POST">
                  <div class="mb-3">
                    <input type="hidden" class="form-control" name="id_factura" value="<?php echo $mostrarRegistro['id_factura'] ?>" required>
                  </div>
                  <div class="alert alert-primary" role="alert">
                    ID Factura: <?php echo $mostrarRegistro['id_factura'] ?>
                  </div>
                  <div class="mb-3">
                    <input type="hidden" class="form-control" name="id_producto" value="<?php echo $mostrarRegistro['id_producto'] ?>" required>
                  </div>
                  <div class="alert alert-primary" role="alert">
                    ID Producto: <?php echo $mostrarRegistro['id_producto'] ?>
                  </div>
                  <div class="mb-3">
                      <label for="cantidad" class="form-label">Cantidad producto</label>
                      <input type="number" class="form-control" name="cantidad" id="cantidad" value="<?php echo $mostrarRegistro['cantidad'] ?>" required>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Actualizar"> 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>