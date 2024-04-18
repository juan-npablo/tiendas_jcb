<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertarSucursal
Descripción: Se inserta en la base de datos todos los campos sobre la ubicacion de la sucursal. 
*/
include("..\conexion.php");

$id_sucursal = $_POST['id_sucursal'];
$nombre_sucursal = $_POST['nombre_sucursal'];
$calle_sucursal = $_POST['calle_sucursal'];
$ciudad_sucursal = $_POST['ciudad_sucursal'];
$departamento_sucursal = $_POST['departamento_sucursal'];

$insertarSucursal = "INSERT INTO `sucursal`(`id_sucursal`, `nombre_sucursal`, `calle_sucursal`,
 `ciudad_sucursal`, `departamento_sucursal`) VALUES 
('$id_sucursal','$nombre_sucursal','$calle_sucursal','$ciudad_sucursal',
'$departamento_sucursal')";

mysqli_query($conn, $insertarSucursal);

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
            text: 'Sucursal insertada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../sucursal.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>