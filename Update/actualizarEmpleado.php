<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: ActualizarEmpleado 
Descripción: Recibe el id registrado en la base de datos, el cual es buscado en ésta y trae los campos relacionados 
             con este id, que dependiendo de la necesidad del usuario podrá editar.
*/		
    include("..\conexion.php");

    $id_empleado = $_GET['id'];
    $seleccionarRegristro="SELECT * FROM empleados WHERE id_empleado ='$id_empleado'";
    $resultadoSeleccion = mysqli_query($conn,$seleccionarRegristro);
    $mostrarRegistro = mysqli_fetch_array($resultadoSeleccion);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar empleado</title>
    <script type="text/javascript" src="..\jquery-3.4.1.js"></script>
	<script type="text/javascript" src="..\cargarmunicipios.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-header border-bottom border-warning bg-secondary bg-opacity-25 text-center">
                Formulario Empleados
              </div>
              <div class="card-body">
                <form action="updateEmpleado.php" method="POST" id="f1" name="f1">
                <div class="row">
                  <div class="col-4">
                    <div class="mb-3">
                      <input type="hidden" class="form-control" name="id_empleado" id="id" value="<?php echo $mostrarRegistro['id_empleado'] ?>" required>
                    </div>
                    <div class="alert alert-primary" role="alert">
                        ID Empleado: <?php echo $mostrarRegistro['id_empleado'] ?>
                     </div>
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="nombre_empleado" id="nombre" value="<?php echo $mostrarRegistro['nombre_empleado'] ?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="Apellido" class="form-label">Apellido</label>
                      <input type="text" class="form-control" name="apellidos_empleado" id="Apellidos" value="<?php echo $mostrarRegistro['apellidos_empleado'] ?>" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                  </div>
                  <div class="col-4">
                    <div class="mb-3">
                      <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                      <input type="date" class="form-control" name="fechaNacimiento_empleado" id="fechaNacimiento" value="<?php echo $mostrarRegistro['fechaNacimiento_empleado'] ?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="telefono" class="form-label">Telefono</label>
                      <input type="number" class="form-control" name="telefono_empleado" id="telefono" value="<?php echo $mostrarRegistro['telefono_empleado'] ?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="calle" class="form-label">Calle</label>
                      <input type="text" class="form-control" name="calle_empleado" id="calle" value="<?php echo $mostrarRegistro['calle_empleado'] ?>" required>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="mb-3">
                      <label for="departamento" class="form-label">Departamento</label>
                      <select name="departamento_empleado" id="departamentos" onchange="cambia_departamento()" class="form-select" aria-label="Default select example" required>
                        <option selected><?php echo $mostrarRegistro['departamento_empleado'] ?></option>
                        <option value="AMAZONAS">AMAZONAS</option>
                        <option value="ANTIOQUIA">ANTIOQUIA</option>
                        <option value="ARAUCA">ARAUCA</option>
                        <option value="ATLÁNTICO">ATLÁNTICO</option>
                        <option value="BOLÍVAR">BOLÍVAR</option>
                        <option value="BOYACÁ">BOYACÁ</option>
                        <option value="CALDAS">CALDAS</option>
                        <option value="CAQUETÁ">CAQUETÁ</option>
                        <option value="CASANARE">CASANARE</option>
                        <option value="CAUCA">CAUCA</option>
                        <option value="CESAR">CESAR</option>
                        <option value="CHOCÓ">CHOCÓ</option>
                        <option value="CÓRDOBA">CÓRDOBA</option>
                        <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                        <option value="DISTRITO CAPITAL">DISTRITO CAPITAL</option>
                        <option value="GUAINÍA">GUAINÍA</option>
                        <option value="GUAVIARE">GUAVIARE</option>
                        <option value="HUILA">HUILA</option>
                        <option value="LA GUAJIRA">LA GUAJIRA</option>
                        <option value="MAGDALENA">MAGDALENA</option>
                        <option value="META">META</option>
                        <option value="NARIÑO">NARIÑO</option>
                        <option value="NORTE DE SANTANDER">NORTE DE SANTANDER</option>
                        <option value="PUTUMAYO">PUTUMAYO</option>
                        <option value="QUINDÍO">QUINDÍO</option>
                        <option value="RISARALDA">RISARALDA</option>
                        <option value="SAN ANDRÉS Y PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
                        <option value="SANTANDER">SANTANDER</option>
                        <option value="SUCRE">SUCRE</option>
                        <option value="TOLIMA">TOLIMA</option>
                        <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                        <option value="VAUPÉS">VAUPÉS</option>
                        <option value="VICHADA">VICHADA</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="ciudad" class="form-label">Ciudad</label>
                      <select name="ciudad_empleado" id="minucipios" class="form-select" aria-label="Default select example" required>
                        <option selected><?php echo $mostrarRegistro['ciudad_empleado'] ?></option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="sucursal" class="form-label">Sucursal</label>
                      <br>
                      <select name="id_sucursal" class="form-select" aria-label="Default select example" required>
                      <option selected><?php echo $mostrarRegistro['id_sucursal'] ?></option>
                        <?php	
                          $SQL ="SELECT * FROM sucursal";
                          $buscar_sucursal = $conn -> query($SQL);
                          while($mostrar= $buscar_sucursal -> fetch_array()){
                            echo "<option value= '".$mostrar['id_sucursal']."'>".$mostrar['id_sucursal']." - ".$mostrar['nombre_sucursal']."</option>";
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