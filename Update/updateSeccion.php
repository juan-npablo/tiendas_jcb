<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: UpdateSeccion
Descripción: Con los datos cambiados desde el modulo actualizarSeccion, ya son insertados 
             y cambiados en la base de datos.
*/
include("..\conexion.php");

$id_seccion = $_POST['id_seccion'];
$nombre_seccion = $_POST['nombre_seccion'];
$id_sucursal = $_POST['id_sucursal'];

$actualizarRegistro = "UPDATE secciones SET 
nombre_seccion ='$nombre_seccion',
id_sucursal = '$id_sucursal' 
WHERE id_seccion = $id_seccion";

mysqli_query($conn,$actualizarRegistro);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <script type="text/javascript">
        swal({
            title: 'Completado',
            text: 'Sección actualizada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../secciones.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>