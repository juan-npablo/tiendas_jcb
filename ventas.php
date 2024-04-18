<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: Ventas 
Descripción: Trae la información de la tabla ventas.
             De igual manera, en este formulario se encuentra la opción de editar y/o eliminar el registro ingresado.
*/	
  include("conexion.php");
  
  $seleccionarRegistros = "SELECT * FROM ventas";
  $resultadoSeleccion = mysqli_query($conn, $seleccionarRegistros);

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
      <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #ffc107;">
        <div class="container-md">
          <a class="navbar-brand" href="#"><b>TIENDAS JCB</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="empleados.php">Empleados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sucursal.php">Sucursal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="secciones.php">Secciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="suministra.php">Suministra</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="proveedores.php">Proveedores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ventas.php">Ventas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="factura.php">Factura</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clientes.php">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="metodosPago.php">Metodos de Pago</a>
              </li>
            </ul>
          </div>
        </div>
      </nav><br>

      <div class="container mt-5">
        <div class="row">
          <div class="col-md-3">
            <div class="card border border-dark">
              <div class="card-header border-bottom border-warning bg-secondary bg-opacity-25 text-center">
                Formulario Ventas
              </div>
              <div class="card-body">
                <form action="Insercion\insertarVenta.php" method="POST">
                  <div class="mb-3">
                    <label for="id" class="form-label">ID Factura</label>
                    <br>
                    <select name="id_factura" class="form-select" aria-label="Default select example" required>
                      <option selected></option>
                        <?php	
                          $SQL ="SELECT * FROM factura";
                          $buscar_factura = $conn -> query($SQL);
                          while($mostrar= $buscar_factura -> fetch_array()){
                            echo "<option value= '".$mostrar['id_factura']."'>".$mostrar['id_factura']."</option>";
                          }
                        ?>
                    </select>
                  </div>
                  <div class="mb-3">
                      <label for="id" class="form-label">ID Producto</label>
                      <br>
                      <select name="id_producto" class="form-select" aria-label="Default select example" required>
                        <option selected></option>
                          <?php	
                            $SQL ="SELECT * FROM productos";
                            $buscar_producto = $conn -> query($SQL);
                            while($mostrar= $buscar_producto -> fetch_array()){
                              echo "<option value= '".$mostrar['id_producto']."'>".$mostrar['id_producto']." - ".$mostrar['nombre_producto']."</option>";
                            }
                          ?>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="cantidad" class="form-label">Cantidad producto</label>
                      <input type="number" class="form-control" name="cantidad" id="cantidad" required>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Agregar venta"> 
                  <input type="reset" class="btn btn-danger" value="Borrar">
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-9">
            <div class="container mt-5">
              <table class="table">
                <thead class="table-primary table-striped">
                  <tr>
                      <th>ID Factura</th>
                      <th>ID Producto</th>
                      <th>Cantidad producto</th>
                      <th></th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    while($mostrarRegistros = mysqli_fetch_array($resultadoSeleccion)){
                      echo "<tr>";
                        echo "<td>" .$mostrarRegistros['id_factura']. "</td>";
                        echo "<td>" .$mostrarRegistros['id_producto']. "</td>";
                        echo "<td>" .$mostrarRegistros['cantidad']. "</td>";
                  ?>
                      <td><a href="Update\actualizarVenta.php?id_factura=<?php echo $mostrarRegistros['id_factura']?>&id_producto=<?php echo $mostrarRegistros['id_producto']?>" class="btn btn-info">Editar</a></td>
                      <td><a href="Delete\deleteVenta.php?id_factura=<?php echo $mostrarRegistros['id_factura']?>&id_producto=<?php echo $mostrarRegistros['id_producto']?>" class="btn btn-danger">Eliminar</a></td>
                  <?php
                    }
                  ?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
      
  </body>
</html>