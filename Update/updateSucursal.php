<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: UpdateSucursal
Descripción: Con los datos cambiados desde el modulo actualizarSucursal, ya son insertados 
             y cambiados en la base de datos.
*/
include("..\conexion.php");

$id_sucursal = $_POST['id_sucursal'];
$nombre_sucursal = $_POST['nombre_sucursal'];
$calle_sucursal = $_POST['calle_sucursal'];
$ciudad_sucursal = $_POST['ciudad_sucursal'];
$departamento_sucursal = $_POST['departamento_sucursal'];

$actualizarRegistro = "UPDATE sucursal SET 
nombre_sucursal ='$nombre_sucursal',
calle_sucursal = '$calle_sucursal',
departamento_sucursal = '$departamento_sucursal',
ciudad_sucursal = '$ciudad_sucursal'

WHERE id_sucursal = $id_sucursal";

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
            text: 'Sucursal actualizada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../sucursal.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>