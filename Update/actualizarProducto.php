<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: ActualizarProducto
Descripción: Recibe el id registrado en la base de datos, el cual es buscado en ésta y trae los campos relacionados 
             con este id, que dependiendo de la necesidad del usuario podrá editar.
*/		
    include("..\conexion.php");

    $id_producto = $_GET['id'];
    $seleccionarRegristro="SELECT * FROM productos WHERE id_producto ='$id_producto'";
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
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-header border-bottom border-warning bg-secondary bg-opacity-25 text-center">
                Formulario Productos
              </div>
              <div class="card-body">
                <form action="updateProducto.php" method="POST">
                  <div class="row">
                    <div class="col-4">
                      <div class="mb-3">
                        <input type="hidden" class="form-control" name="id_producto" id="id" value="<?php echo $mostrarRegistro['id_producto'] ?>" required>
                      </div>
                      <div class="alert alert-primary" role="alert">
                        ID Producto: <?php echo $mostrarRegistro['id_producto'] ?>
                      </div>
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre_producto" id="nombre" value="<?php echo $mostrarRegistro['nombre_producto'] ?>"required>
                      </div>
                      <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input step="any" type="number" class="form-control" name="precio_producto" id="precio" value="<?php echo $mostrarRegistro['precio_producto'] ?>" required>
                      </div>
                      <input type="submit" class="btn btn-primary" value="Actualizar producto">
                    </div>
                    <div class="col-4">
                      <div class="mb-3">
                        <label for="peso" class="form-label">Peso</label>
                        <input type="number" class="form-control" name="peso_producto" id="peso" value="<?php echo $mostrarRegistro['peso_producto'] ?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="fechaVencimiento" class="form-label">Fecha de Vencimiento</label>
                        <input type="date" class="form-control" name="fecha_vencimiento_producto" id="fechaVencimiento" value="<?php echo $mostrarRegistro['fecha_vencimiento_producto'] ?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="lote" class="form-label">Lote</label>
                        <input type="text" class="form-control" name="lote_producto" id="lote" value="<?php echo $mostrarRegistro['lote_producto'] ?>" required>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="mb-3">
                        <label for="id" class="form-label">Seccion</label>
                        <br>
                        <select name="id_seccion" class="form-select" aria-label="Default select example" required>
                          <option selected><?php echo $mostrarRegistro['id_seccion'] ?></option>
                            <?php	
                              $SQL ="SELECT * FROM secciones";
                              $buscar_seccion = $conn -> query($SQL);
                              while($mostrar= $buscar_seccion -> fetch_array()){
                                echo "<option value= '".$mostrar['id_seccion']."'>".$mostrar['nombre_seccion']."</option>";
                              }
                            ?>
                        </select>
                      </div>     
                    </div>   
                  </div>               
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>