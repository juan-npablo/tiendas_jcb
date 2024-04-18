<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertaSeccion
Descripción: Se inserta en la base de datos todos los campos de la sección, su nombre y la surcursal en la cual 
             se encontrará. 
*/
include("..\conexion.php");

$id_seccion = $_POST['id_seccion'];
$nombre_seccion = $_POST['nombre_seccion'];
$id_sucursal = $_POST['id_sucursal'];

$insertarSeccion = "INSERT INTO `secciones`(`nombre_seccion`, `id_sucursal`, `id_seccion`) 
VALUES ('$nombre_seccion','$id_sucursal','$id_seccion')";

mysqli_query($conn, $insertarSeccion);

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
            text: 'Seccion insertada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../secciones.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>