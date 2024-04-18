<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: ActualizarFactura
Descripción: Recibe el id registrado en la base de datos, el cual es buscado en ésta y trae los campos relacionados 
             con este id, que dependiendo de la necesidad del usuario podrá editar.
*/		
    include("..\conexion.php");

    $id_factura = $_GET['id'];
    $seleccionarRegristro="SELECT * FROM factura WHERE id_factura ='$id_factura'";
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
                Formulario Factura
              </div>
              <div class="card-body">
                <form action="updateFactura.php" method="POST">
                  <div class="mb-3">
                    <input type="hidden" class="form-control" name="id_factura" id="id" value="<?php echo $mostrarRegistro['id_factura'] ?>" required>
                  </div>
                  <div class="alert alert-primary" role="alert">
                    ID Factura: <?php echo $mostrarRegistro['id_factura'] ?>
                  </div>
                  <div class="mb-3">
                      <label for="total" class="form-label">Total</label>
                      <input step="any" type="number" class="form-control" name="total_factura" id="total" value="<?php echo $mostrarRegistro['total_factura'] ?>" required>
                  </div>
                  <div class="mb-3">
                      <label for="id" class="form-label">ID Cliente</label>
                      <br>
                      <select name="id_cliente" class="form-select" aria-label="Default select example" required>
                        <option selected><?php echo $mostrarRegistro['id_cliente'] ?></option>
                          <?php	
                            $SQL ="SELECT * FROM clientes";
                            $buscar_cliente = $conn -> query($SQL);
                            while($mostrar= $buscar_cliente -> fetch_array()){
                              echo "<option value= '".$mostrar['id_cliente']."'>".$mostrar['id_cliente']." </option>";
                            }
                          ?>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="pago" class="form-label"> Metodo de pago</label>
                      <br>
                      <select name="id_metodoPago" class="form-select" aria-label="Default select example" required>
                        <option selected><?php echo $mostrarRegistro['id_metodoPago'] ?></option>
                          <?php	
                            $SQL ="SELECT * FROM metodosPago";
                            $buscar_metodoPago = $conn -> query($SQL);
                            while($mostrar= $buscar_metodoPago -> fetch_array()){
                              echo "<option value= '".$mostrar['id_metodoPago']."'>".$mostrar['id_metodoPago']." - ".$mostrar['nombre_metodoPago']."</option>";
                            }
                          ?>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="fechaPago" class="form-label">Fecha de pago</label>
                      <input type="date" class="form-control" name="fechaPago_factura" id="fechaPago" value="<?php echo $mostrarRegistro['fechaPago_factura'] ?>" required>
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